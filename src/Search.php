<?php
include('Classe/Base.php');
include('Classe/Etudiant.php');
include('Classe/Matiere.php');
include('Classe/Note.php');

$etudiant = new Etudiant();
if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $etudiants = $etudiant->Search($q);

    foreach ($etudiants as $value) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">Resultat de recherche...</div>
            <div class="panel-body">
                <div>
                    <label><h4 style="color: black">Nom Etudiant:</h4></label>
                    <a href=""><?php echo "  ". $value['nom'] ?></a>
                </div>
                
                <div>
                    <label>Numero inscription:</label>
                    <?php echo " E ".$value['Num_Inscription'] ?>
                </div>   

                <div>
                    <label>Annee:</label>
                    <?php echo" ". $value['Annee'] ?>
                </div>
                <div>
                    <label>Sexe:</label>
                    <?php echo " " .$value['sexe'] ?>
                </div>    
                <div>
                    <hr style="height: 1px; background-color: black"/>
                </div>
            </div>
        </div>
        <?php
    }
}
?>