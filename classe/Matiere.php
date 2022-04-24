

<?php
class Matiere extends Base {

    public function add($nom, $coef) {
        // Préparation de la requête d'insertion.

        $req = $this->_bdd->prepare('INSERT INTO matiere(libelle,coef) VALUES(:libelle, :coef)');
        $req->execute(array(
            'libelle' => $nom,
            'coef' => $coef
            
        ));
    }

    public function delete($id) {
        // Exécute une requête de type DELETE.
        $this->_bdd->exec('DELETE FROM matiere WHERE code_Mat = ' . $id);
    }

    public function get($id) {
        try {
            $matieres = array();

            $q = $this->_bdd->query('SELECT * FROM matiere WHERE code_Mat =' . $id);

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $matieres[] = $donnees;
            }

            return $matieres;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public function getList() {
         try {
         
            $matieres = array();

            $q = $this->_bdd->query('SELECT * FROM matiere');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $matieres[] = $donnees;
            }

            return $matieres;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public function update($id,$nom,$coef) {
        $req = $this->_bdd->prepare('UPDATE matiere SET libelle = :libelle, coef = :coef WHERE code_Mat = :code_Mat');
        $req->execute(array(
            'libelle' => $nom,
            'coef' => $coef,
            'code_Mat' => $id,
            
        ));
    }
    
    public function  getNom($id){
         try {
            $matieres = array();

            $q = $this->_bdd->query('SELECT libelle FROM matiere WHERE code_Mat =' . $id);

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $matieres[] = $donnees;
            }

            return $matieres;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    
    public function  getLibelle(){
         try {
            $matieres = array();

            $q = $this->_bdd->query('SELECT libelle FROM matiere');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $matieres[] = $donnees;
            }

            return $matieres;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    
     public function  getId($nom){
         try {
            $matieres = array();

            $q = $this->_bdd->query('SELECT code_Mat FROM matiere WHERE libelle ="'.$nom.'"');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $matieres[] = $donnees;
            }

            return $matieres;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    

}
?>

