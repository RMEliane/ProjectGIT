<?php
include 'Classe/Base.php';
include 'Classe/Note.php';
include 'Classe/Etudiant.php';
$GestionNote = new Note();
$numEtudiant = new Etudiant();

if(isset($_POST['niveau'])){
    $niveau = $_POST['niveau'];
    $Etudiant = $GestionNote->getIdEtudiantByNiveau($niveau);
  
}  else {
    $niveau = "L1";
    $Etudiant =$GestionNote->getIdEtudiantByNiveau($niveau);
 
}

?>

<form class="form-group" method="POST" action="">

    <label>Niveau:</label>
    <select name="niveau">   
            <option >L1</option>  
            <option >L2</option> 
            <option >L3</option> 
            <option >M1</option> 
            <option >M2</option> 
    </select>

    <input type="submit" value="voir" class="btn btn-default">

</form>

<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Classement des étudiants par ordre de merite</h4></div>
    <div class="panel-body">

       <table class="table">
            <thead>
                <tr>
                    <th>N°Etudiant</th>
                    <th>Nom Etudiant</th>
                    <th>Moyenne</th>                   
                </tr>
            </thead>
            <tbody >
                <?php foreach ( $Etudiant as $value){  ?>
                <tr>
                    <td><?php  echo 'E00'.$value['num_Inscription']  ?></td>
                    <td><?php  echo $value['nom']  ?></td>
                    <?php 
                    
                    $note = $GestionNote->getNoteByIdEtudiant($value['num_Inscription']);
                    $noteTotal =0.0;
                    $coefficientTotal = 0.0;
                    foreach ($note as $value1){
                        
                        $coef = $GestionNote->getCoef($value1['code_Mat']);
                        foreach ($coef as $value2)  {
                            $noteTotal += $value1['note']*$value2['coef'];
                            $coefficientTotal += $value2['coef'];
                        }               
                            
                    }
                    ?>
                    <td>
                        <?php  echo $noteTotal /$coefficientTotal?></td>
                </tr>
                
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>
