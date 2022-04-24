<?php

class Note extends Base {

    public function add($codeMat, $num, $note) {
        // Préparation de la requête d'insertion.

        $req = $this->_bdd->prepare('INSERT INTO notes(code_Mat,num_Inscription,note) VALUES(:code_Mat, :num_Inscription,:note)');
        $req->execute(array(
            'code_Mat' => $codeMat,
            'num_Inscription' => $num,
            'note' => $note
        ));
    }

    public function delete($id) {
        // Exécute une requête de type DELETE.
        $this->_bdd->exec('DELETE FROM notes WHERE id_Note = ' . $id);
    }

    public function get($id) {
        try {
            $notes = array();

            $q = $this->_bdd->query('SELECT * FROM notes WHERE id_Note =' . $id);

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $notes[] = $donnees;
            }

            return $notes;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    
    public function getByNumEtudiant($id) {
        try {
            $notes = array();

            $q = $this->_bdd->query('SELECT * FROM notes WHERE num_Inscription =' . $id);

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $notes[] = $donnees;
            }

            return $notes;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    

    public function getList() {
        try {

            $note = array();

            $q = $this->_bdd->query('SELECT * FROM notes  ORDER BY num_Inscription DESC');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $note[] = $donnees;
            }

            return $note;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public function update($id, $matiere, $numEtudiant, $note) {

        $req = $this->_bdd->prepare('UPDATE notes SET code_Mat = :code_Mat, num_Inscription = :num_Inscription, note = :note WHERE id_Note = :id_Note');
        $req->execute(array(
            'code_Mat' => $matiere,
            'num_Inscription' => $numEtudiant,
            'note' => $note,
            'id_Note' => $id
        ));
    }

    public function getNote($id) {
        $note = array();
        $q = $this->_bdd->query('SELECT note FROM notes WHERE id_Note=' . $id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $note[] = $donnees;
        }

        return $note;
    }
    
    public function getBilletin($id){
        $bulletin = array();
        $q = $this->_bdd->query('SELECT * FROM etudiants AS e,notes AS n,matiere AS m WHERE n.num_Inscription=e.Num_Inscription AND n.code_Mat=m.code_Mat AND e.Num_Inscription='.$id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $bulletin[] = $donnees;
        }

        return $bulletin;
    }
    
    public function getClassement($niveau){
        $bulletin = array();
        $q = $this->_bdd->query('SELECT * FROM etudiants AS e,notes AS n,matiere AS m WHERE n.num_Inscription=e.Num_Inscription AND n.code_Mat=m.code_Mat AND e.Annee="'.$niveau.'"');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $bulletin[] = $donnees;
        }

        return $bulletin;
    }
    
    public function getIdEtudiantByNiveau($niveau) {
        $id = array();
        $q = $this->_bdd->query('SELECT DISTINCT num_Inscription,nom FROM etudiants WHERE Annee="' .$niveau.'" ');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $id[] = $donnees;
        }

        return $id;
    }
    
    public function getNoteByIdEtudiant($id) {
        $note = array();
        $q = $this->_bdd->query('SELECT * FROM notes WHERE num_Inscription=' . $id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $note[] = $donnees;
        }

        return $note;
    }
    
    public function getCoef($id) {
        $coef = array();
        $q = $this->_bdd->query('SELECT * FROM matiere WHERE code_Mat=' . $id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $coef[] = $donnees;
        }

        return $coef;
    }


}
?>