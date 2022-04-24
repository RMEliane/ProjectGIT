<?php
include 'Classe/Base.php';
include 'Classe/Matiere.php';
include 'include/menuMatiere.php';
$listMatiere= new Matiere();
$listesMatieres=$listMatiere->getList();
?>

<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Listes Matieres </h4></div>
  <div class="panel-body">
   
    <table class="table">
        <thead>
            <tr>
                <th>Identification</th>
                <th>Nom Matiere</th>
                <th>Coef</th>
            </tr>
        </thead>
        <tbody >
           <?php
           foreach ($listesMatieres as $list){
            ?>
            <tr>
                <td><?php echo $list['code_Mat'] ?></td>
                <td><?php echo $list['libelle'] ?></td>
                <td><?php echo $list['coef'] ?></td>
               
            </tr>
            <?php    
           }      
           ?>
        </tbody>
        
    </table>

  </div>
</div>