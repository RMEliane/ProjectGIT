<?php
include ('Classe/Base.php');
include ('../Classe/Note.php');

$note= new Note();
if(isset($_GET['id'])){
    $id= $_GET['id'];
 
    $note->delete($id);
  header('location: ../page.php?Op_Note=2');
}

