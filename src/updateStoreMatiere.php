<?php
include '../Classe/Base.php';
include '../Classe/Matiere.php';
$e = new Matiere();

if (isset($_POST['nom']) and isset($_POST['coef'])) {
   
        $id = $_GET['id'];
        $etudiantsUpDate = $e->update($id, $_POST['nom'], $_POST['coef']);
        header('location: ../page.php?Op_Mat=2');
   
}
?>