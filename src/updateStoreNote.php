<?php
include '../Classe/Base.php';
include '../Classe/Matiere.php';
include '../Classe/Note.php';
$n = new Note();
$m = new Matiere();
if (isset($_POST['nomMatiere']) and isset($_POST['num_Inscription']) and isset($_POST['note'])) {
    $idMatieres = 0;
    $idM = $m->getId($_POST['nomMatiere']);
   foreach ( $idM as $value) { 
         $idMatieres= $value['code_Mat'];              
      } 
    $id = $_GET['id'];
    $n->update($id, $idMatieres, $_POST['num_Inscription'], $_POST['note']);
    header('location: ../page.php?Op_Note=2');
}

?>