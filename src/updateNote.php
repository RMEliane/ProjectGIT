<?php
include 'Classe/Base.php';
include 'Classe/Note.php';
include 'Classe/Matiere.php';
include 'Classe/Etudiant.php';
include 'include/menuNote.php';

$note = new Note();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matiere = new Matiere();
    $matieres = $matiere->getLibelle();

    $etudiant = new Etudiant();
    $listIdEtudiants = $etudiant->getId();
    
    $n = array();
    $notes = $note->getNote($id);
    $n = $notes[0];
}
?>
<div class="panel panel-info">
    <div class="panel-heading">Modification des informations</div>
    <div class="panel-body" style="margin-left: 2%">
        <form action="./src/updateStoreNote.php?id=<?php echo $id ?>" method="POST">
            <div class="form-group">
                <label for="Nom">Nom Matiere:</label>
                <select name="nomMatiere" class="form-control" id="nomMatiere" >
                    <?php foreach ($matieres as $value) { ?>
                        <option><?php echo $value['libelle'] ?></option>

                    <?php } ?>
                </select>
            </div>
            <label>Numero Inscription:</label>
            <select name="num_Inscription" class="form-control">
                <?php foreach ( $listIdEtudiants as $value) { ?>
                <option><?php echo  $value['num_Inscription']  ?></option>
                
                <?php }  ?>
            </select>
            <label>Note:</label>
            <input type="text" name="note" class="form-control" value="<?php echo $n['note'] ?>">
            <div style="margin-top: 20px;">
                <input type="submit" value="Modifier" class="btn btn-success">
            </div>    
        </form>
    </div>
    <div class="panel-footer">Modification</div>
</div>

