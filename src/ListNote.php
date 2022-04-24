<?php
include 'Classe/Base.php';
include 'Classe/Note.php';
include 'Classe/Etudiant.php';
include 'Classe/Matiere.php';
include 'include/menuNote.php';
$listNote = new Note();
$listNotes = $listNote->getList();

$listeNomEtudiant = new Etudiant();
$listMatiere = new Matiere();
$idEtudiants = $listeNomEtudiant->getId();
?>



<div class="panel panel-info">
    <div class="panel-heading" style="text-align: center"><h4>Listes Notes </h4></div>
    <div class="panel-body">

        <table class="table">
            <thead>
                <tr>
                    <th>Identification</th>
                    <th>Nom Matiere</th>
                    <th>Nom Etudiant</th>
                    <th>Note</th>

                </tr>
            </thead>
            <tbody >
                <?php
                foreach ($listNotes as $list) {
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

                    </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>

    </div>
</div>