<?php
include 'Classe/Base.php';
include 'Classe/Matiere.php';
include 'include/menuMatiere.php';
$matiere = new Matiere();
$listeMatiere = $matiere->getList();
?>
<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Listes Matieres</h4></div>
  <div class="panel-body">
   
    <table class="table">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom Matiere</th>
                <th>Coefficient</th>
                
            </tr>
        </thead>
        <tbody >
           <?php
           foreach ($listeMatiere as $list){
            ?>
            <tr>
                <td><?php echo $list['code_Mat'] ?></td>
                <td><?php echo $list['libelle'] ?></td>
                <td><?php echo $list['coef'] ?></td>
                <td><a href="page.php?updateMatiere=0&id= <?php echo $list['code_Mat'] ?>" class="btn btn-link">Modifier</a></td>
                <td><a href="page.php?confMatiere=1&id= <?php echo $list['code_Mat'] ?>" class="btn btn-link">Supprimer</a></td>
            </tr>
            <?php    
           }      
           ?>
        </tbody>
        
    </table>

  </div>
</div>