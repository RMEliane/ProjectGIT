
<?php
class Etudiant extends Base {

    
    public function add($nom, $adresse, $dateNaissance, $sexe, $annee) {
        // Préparation de la requête d'insertion.

        $req = $this->_bdd->prepare('INSERT INTO etudiants(nom, adresse, DateNaiss, sexe, annee) VALUES(:nom, :adresse, :DateNaiss, :sexe, :annee)');
        $req->execute(array(
            'nom' => $nom,
            'adresse' => $adresse,
            'DateNaiss' => $dateNaissance,
            'sexe' => $sexe,
            'annee' => $annee,
        ));
    }

    public function delete($id) {
        // Exécute une requête de type DELETE.
        $this->_bdd->exec('DELETE FROM etudiants WHERE Num_Inscription = ' . $id);
    }

    public function get($id) {
        try {
            $etudiant = array();

            $q = $this->_bdd->query('SELECT * FROM etudiants WHERE Num_Inscription =' . $id);

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $etudiant[] = $donnees;
            }

            return $etudiant;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public function getList() {
        // Retourne la liste de tous les Etudiants.

        try {
            //connexion a la base de donnee
            //$bdd = new PDO('mysql:host=localhost;dbname=gestion_note', 'root', '');

            $etudiant = array();

            $q = $this->_bdd->query('SELECT * FROM etudiants');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $etudiant[] = $donnees;
            }

            return $etudiant;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public function update($id,$nom,$adresse,$dateNaisse,$sexe,$annee) {
        $req = $this->_bdd->prepare('UPDATE etudiants SET nom = :nom, adresse = :adresse,DateNaiss= :DateNaiss, sexe= :sexe , annee = :annee WHERE Num_Inscription = :Num_Inscription');
        $req->execute(array(
            'nom' => $nom,
            'adresse' => $adresse,
            'DateNaiss' => $dateNaisse,
            'sexe'=>$sexe,
            'annee'=>$annee,
            'Num_Inscription'=>$id
        ));
    }
    
    public function  getNom($id){
         try {
            $etudiant = array();

            $q = $this->_bdd->query('SELECT nom FROM etudiants WHERE Num_Inscription =' . $id);

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $etudiant[] = $donnees;
            }

            return $etudiant;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    
    public function  getId(){
         try {
            $etudiant = array();

            $q = $this->_bdd->query('SELECT num_Inscription FROM etudiants');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $etudiant[] = $donnees;
            }

            return $etudiant;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    
    public function  Search($query){
        
         try {
            $etudiant = array();
            $q = $this->_bdd->query("SELECT * FROM etudiants WHERE nom LIKE '%".$query."%' OR num_Inscription LIKE '".$query."%'");

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $etudiant[] = $donnees;
            }

            return $etudiant;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    
    public function  getByNiveau($query){
        
         try {
            $etudiant = array();
            $q = $this->_bdd->query("SELECT * FROM etudiants WHERE Annee='".$query."'");

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $etudiant[] = $donnees;
            }

            return $etudiant;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

}
?>

