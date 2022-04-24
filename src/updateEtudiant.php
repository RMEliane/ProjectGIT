<?php
include 'Classe/Base.php';
include 'Classe/Etudiant.php';
include 'include/menu.php';

$e = new Etudiant();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $etudiant = $e->get($id);
    $listArray=$etudiant[0];
    
}

?>
<div class="panel panel-info">
    <div class="panel-heading">Modification des informations</div>
    <div class="panel-body" style="margin-left: 2%">
        <form action="./src/update.php?id=<?php echo $id ?>" method="POST">
            <div class="form-group">
                <label for="Nom">Nom Etudiant:</label>
                <input type="text" class="form-control"  placeholder="nom..." value="<?php echo $listArray['nom']; ?>" name="nom">
            </div>
            <div class="form-group">
                <label for="Adresse">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Adresse" value="<?php echo $listArray['adresse']; ?>" name="adresse">
            </div>
            <div class="form-group">
                <label for="Date de Naissance">Date de Naissance</label>
                <input type="text" class="form-control"  placeholder="Adresse" value="<?php echo $listArray['DateNaiss']; ?>" name="dateNaiss">
            </div>
            <div class="form-group">
                <label>Sexe:</label>
                <select name="sexe" class="form-control">
                    <option>Masculin</option>
                    <option>Feminin</option>
                </select>
            </div>
            <div class="form-group">
                <label>Année:</label>
                <select name="annee" class="form-control">
                    <option>L1</option>
                    <option>L2</option>
                
                    <option>L3</option>
                    <option>M1</option>
                    <option>M2</option>
                </select>
            </div>
            <input type="submit" value="Modifier" class="btn btn-success">
        </form>
    </div>
    <div class="panel-footer">Modification</div>
</div>