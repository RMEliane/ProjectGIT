<?php
include 'Classe/Base.php';
include 'Classe/Etudiant.php';
include 'include/menu.php';
$etudiants = new Etudiant();
$listEtudiants = $etudiants->getList();
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
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody >
           <?php
           foreach ($listEtudiants as $list){
            ?>
            <tr>
                <td><?php echo $list['Num_Inscription'] ?></td>
                <td><?php echo $list['nom'] ?></td>
                <td><?php echo $list['adresse'] ?></td>
               
                <td><?php echo $list['DateNaiss'];?></td>               
                <td><?php echo $list['sexe'] ?></td>
                <td><?php echo $list['Annee'] ?></td>
                <td><a href="page.php?update=0&id= <?php echo $list['Num_Inscription'] ?>" class="btn btn-link">Modifier</a></td>
                <td><a href="page.php?conf=1&id= <?php echo $list['Num_Inscription'] ?>" class="btn btn-link">Supprimer</a></td>
            </tr>
            <?php    
           }      
           ?>
        </tbody>
        
    </table>

  </div>
</div>