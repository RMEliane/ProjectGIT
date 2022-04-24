
<?php
include 'Classe/Base.php';
include 'Classe/Note.php';
include 'Classe/Etudiant.php';
$note = new Note();
$etudiant = new Etudiant();
$numeEtudiant = $etudiant->getId();
$coefTotal = 0;
$notePodere = 0;
$totalNotePondere=0;
$moyenne =0;
if (isset($_POST['numero'])) {
    $numEtudiant = $_POST['numero'];
    $bullitins = $note->getBilletin($numEtudiant);
    foreach ($bullitins as $value) {
        $nom = $value['nom'];
        $niveau = $value['Annee'];
    }
} else {
    $numEtudiant = 1;
    $bullitins = $note->getBilletin($numEtudiant);
    foreach ($bullitins as $value) {
        $nom = $value['nom'];
        $niveau = $value['Annee'];
    }
}
?>
<form class="form-group" method="POST" action="">

    <label>N°Etudiant:</label>
    <select name="numero">
        <?php foreach ($numeEtudiant as $value) { ?>
            <option ><?php echo $value['num_Inscription'] ?></option>
        <?php } ?>
    </select>

    <input type="submit" value="voir" class="btn btn-default">

</form>

<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Bulletin Des Notes</h4></div>
    <div class="panel-body">
        <div style="text-align: center">

            <div>

                <table class="table table-bordered" style="width: 50%">

                    <tr>
                        <td> N°Etudiant:</td>
                        <td><?php echo $numEtudiant ?></td>

                    </tr>

                    <tr>
                        <td>Nom Etudiant:</td>
                        <td><?php echo $nom ?></td>
                    </tr>
                    <tr>
                        <td>Niveau:</td>
                        <td><?php echo $niveau ?></td>
                    </tr>

                </table>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Designation</th>
                        <th>Coefficient</th>
                        <th>Note</th>
                        <th>Note Ponderee</th>

                    </tr>
                </thead>
                <tbody >


                    <?php
                    $bullitins = $note->getBilletin($numEtudiant);
                    foreach ($bullitins as $value) {
                    ?>

                        <tr>
                            <td> <?php echo $value['libelle'] ?></td> 
                            <td> <?php echo $value['coef'] ?></td> 
                            <td> <?php echo $value['note'] ?></td> 
                            <?php
                            $nbr = $value['coef'];
                            $nbr1 = $value['note'];
                            $notePodere = $nbr * $nbr1;
                            $coefTotal += $value['coef'];
                            $totalNotePondere +=$notePodere; 
                            ?>
                            <td> <?php echo  $notePodere?></td> 
                        </tr>
                        <?php
                    }
                    ?>

                    <tr >

                        <th></th>
                        <th></th>
                        <th>MOYENNE</th>
                        
                        <th><?php $moyenne=$totalNotePondere/$coefTotal; echo  $moyenne ?></th>
                    </tr>
                    
                    <tr >

                        <th></th>
                        <th></th>
                        <th>OBSERVATION</th>
                        
                        <th style="color: red">
                        <?php  
                            if($moyenne<7.5){
                                echo 'Exclus';
                            }else if($moyenne>=7.5 and $moyenne<10){
                                echo 'Redoublant';
                            }else if($moyenne>=10 and  $moyenne<=20){
                                echo 'Admis';
                            }  else {
                                echo 'Je ne connais pas';
                            }
                        ?>
                        </th>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>
</div>

