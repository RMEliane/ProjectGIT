<?php
include ('../Classe/Base.php');
include ('../Classe/Etudiant.php');

$e= new Etudiant();
if(isset($_GET['id'])){
    $id= $_GET['id'];
 
    $e->delete($id);
  header('location: ../page.php?Op_Et=2');
}

