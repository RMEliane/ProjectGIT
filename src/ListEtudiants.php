<?php
include ('Classe/Base.php');
include('Classe/Etudiant.php');
include 'include/menu.php';
?>

<form class="form-group" method="POST" action="">

    <label>Niveau etudiant:</label>
   
    <select name="annee">
        <option >L1</option>
        <option >L2</option>
        <option >L3</option>
        <option >M1</option>
        <option >M2</option>
    </select>

    <input type="submit" value="voir" class="btn btn-default">

</form>

<?php
$etudiants = new Etudiant();

$query = "L1";
if (isset($_POST['annee'])) {
    $query = $_POST['annee'];
    $listEtudiants = $etudiants->getByNiveau($query);
} else {
    $listEtudiants = $etudiants->getByNiveau("L1");
}
?>


<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Listes Etudiants</h4></div>
    <div class="panel-body">

        <table class="table">
            <thead>
                <tr>
                    <th>N°Inscription</th>
                    <th>Nom Etudiant</th>
                    <th>Adresse</th>
                    <th>Date de Naissance</th>
                    <th>Sexe</th>
                    <th>Année</th>
                </tr>
            </thead>
            <tbody >

                <?php
                foreach ($listEtudiants as $list) {
                    ?>
                    <tr>
                        <td><?php echo $list['Num_Inscription'] ?></td>
                        <td><?php echo $list['nom'] ?></td>
                        <td><?php echo $list['adresse'] ?></td>

                        <td><?php echo $list['DateNaiss']; ?></td>               
                        <td><?php echo $list['sexe'] ?></td>
                        <td><?php echo $list['Annee'] ?></td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
            <?php
            if (empty($listEtudiants)) {
                ?>
                <tr>
                    <td colspan="6">
                        <div class="alert alert-info" role="alert">
                            <h4>La liste est vide!! </h4>
                            <p><h5>Listes des Etudiants en niveau <?php echo $query ?></h5></p>
                        </div>
                    </td>

                </tr>
                <?php
            }
            ?>                            

        </table>

    </div>
</div>
