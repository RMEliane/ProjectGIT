<?php
class Base {
    
    protected $_bdd;
      
    public function connexion() {
        $dbms="mysql";
        $host="127.0.0.1";
        $port="3308";
        $dbname="gestion_note";
        $dbuser="root";
        $dbpassword='';

        
        try{
                    $this->_bdd = new PDO(
                        $dbms.
                        ':host='.$host.';
                        port='.$port.';
                        dbname='.$dbname.';'
                        ,$dbuser
                        ,$dbpassword
                    );
        } catch (PDOException $e) {
        print "Erreur de connexion a la base !: " . $e->getMessage() . "<br/>";
        die();
        }
                        return $this->_bdd;
    }

    public function __construct() {
        $this->connexion();
    }
}

?>