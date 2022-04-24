<?php
include 'Classe/Base.php';
include 'Classe/Matiere.php';
include 'include/menuMatiere.php';
?>


<?php
if (isset($_POST['nom'])and isset($_POST['coef'])) {

    if (empty($_POST['nom']) or empty($_POST['coef'])) {
        ?>
        <div class="alert alert-danger" role="alert">
            <h4>Champ doit être obligatoire!!!</h4>
        </div>
        <?php
    } else if (is_numeric($_POST['coef'])) {


        $Matieres = new Matiere();
        $Matieres->add($_POST['nom'], $_POST['coef']);
        ?>


        <div class="alert alert-success" role="alert">
            <h4>Ajouter avec succès!</h4>
        </div>
        <?php
    } else {
        ?>

        <div class="alert alert-danger" role="alert">
            <h4>Coeficient doit être chiffre!!!</h4>
        </div>
        <?php
    }
}
?>

<div class="panel panel-info" style="width: 60%">
    <div class="panel-heading" style="text-align: center"><h4>Formulaire Saisie Matieres</h4></div>
    <div class="panel-body">
        <form class="form-group" method="POST" action="">

            <label>Nom Matiere:</label>
            <input type="text" name="nom" class="form-control">
            <label>Coeficient:</label>
            <input type="number" name="coef" class="form-control">

            <div style="margin-top: 20px;">
                <input type="submit" value="Enregistrer" class="btn btn-default">
            </div>
        </form>
    </div>
</div>