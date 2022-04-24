<?php
include ('../Classe/Base.php');
include ('../Classe/Matiere.php');

$e= new Matiere();
if(isset($_GET['id'])){
    $id= $_GET['id'];
 
    $e->delete($id);
  header('location: ../page.php?Op_Mat=2');
}

