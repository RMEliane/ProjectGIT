<?php
include '../Classe/Base.php';
include '../Classe/Etudiant.php';
$e = new Etudiant();

if (isset($_POST['nom']) and isset($_POST['adresse'])) {
   
        $id = $_GET['id'];
        $etudiantsUpDate = $e->update($id, $_POST['nom'], $_POST['adresse'], $_POST['dateNaiss'], $_POST['sexe'], $_POST['annee']);
        header('location: ../index.php?Op_Et=2');
   
}

?>