<?php
include 'Classe/Base.php';
include 'Classe/Note.php';
include 'Classe/Etudiant.php';
include 'Classe/Matiere.php';
include 'include/menuNote.php';
$listNote= new Note();
$listNotes=$listNote->getList();

$listeNomEtudiant = new Etudiant();
$listMatiere = new Matiere();

?>

<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Listes Notes</h4></div>
  <div class="panel-body">
   
    <table class="table">
        <thead>
            <tr>
                <th>Identification</th>
                <th>Nom Matiere</th>
                <th>Nom Etudiant</th>
                <th>Note</th>
                <th>Editer</th>
                <th>Supression</th>
            </tr>
        </thead>
        <tbody >
           <?php
           foreach ($listNotes as $list){
               $nomEtudiants = array();
               $nomEtudiant = $listeNomEtudiant->getNom($list['num_Inscription']);
               $nomEtudiants = $nomEtudiant[0];
               
               $nomMatieres = array();
               $nomMatiere = $listMatiere->getNom($list['code_Mat']);
               $nomMatieres = $nomMatiere[0];
              
            ?>
            <tr>
                <td><?php echo $list['id_Note'] ?></td>
                <td><?php echo $nomMatieres['libelle'] ?></td>
                <td><?php echo $nomEtudiants['nom'] ?></td>
                <td><?php echo $list['note'] ?></td>
                <td><a href="page.php?updateNote=0&id=<?php echo $list['id_Note']  ?>" class="btn btn-link">Editer</a></td>
                <td><a href="page.php?confNote=0&id=<?php echo $list['id_Note'] ?>" class="btn btn-link">Suprimer</a></td>
            </tr>
            <?php    
           }      
           ?>
        </tbody>
        
    </table>

  </div>
</div>