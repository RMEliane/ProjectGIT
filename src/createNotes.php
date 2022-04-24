<?php
include 'Classe/Base.php';
include 'Classe/Note.php';
include 'Classe/Matiere.php';
include 'Classe/Etudiant.php';
include 'include/menuNote.php';

$etudiant = new Etudiant();
$listIdEtudiants = $etudiant->getId();

$matiere = new Matiere();
$matieres = $matiere->getLibelle();



if (isset($_POST['nomMatiere'])and isset($_POST['note'])) {
    $idmat = 0;
     $idMatiere = $matiere->getId($_POST['nomMatiere']);
     foreach ( $idMatiere as $value) { 
         $idmat= $value['code_Mat'];              
      } 
    if (empty($_POST['note']) or empty($_POST['nomMatiere']) or empty($_POST['num_Inscription'])) {
        ?>
        <div class="alert alert-danger" role="alert">
            <h4>Champ doit être obligatoire!!!</h4>
        </div>
        <?php
    } else {
        $note = new Note();
        $note->add($idmat, $_POST['num_Inscription'], $_POST['note'])
        ?>


        <div class="alert alert-success" role="alert">
            <h4>Succe!!!!!!</h4>
        </div>
    
        <?php
    }
}

?>

<div class="panel panel-info" style="width: 60%">
    <div class="panel-heading" style="text-align: center"><h4>Formulaire Saisie Notes</h4></div>
    <div class="panel-body">
        <form class="form-group" method="POST" action="">

            <label>Nom Matiere:</label>
            <select name="nomMatiere" class="form-control" id="nomMatiere" >
                <?php foreach ( $matieres as $value) { ?>
                <option><?php echo  $value['libelle']  ?></option>
                
                <?php }  ?>
            </select>
            
            <label>Numero Inscription:</label>
            <select name="num_Inscription" class="form-control">
                <?php foreach ( $listIdEtudiants as $value) { ?>
                <option><?php echo  $value['num_Inscription']  ?></option>
                
                <?php }  ?>
            </select>
            <label>Note:</label>
            <input type="text" name="note" class="form-control">
            <div style="margin-top: 20px;">
                <input type="submit" value="Enregistrer" class="btn btn-default">
            </div>
        </form>
    </div>
</div>
