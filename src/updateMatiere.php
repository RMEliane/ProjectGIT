<?php
include 'Classe/Base.php';
include 'Classe/Matiere.php';
include 'include/menuMatiere.php';

$e = new Matiere();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $matiere= $e->get($id);
    $listArray=$matiere[0];
    
    
}

?>
<div class="panel panel-info">
    <div class="panel-heading">Modification des informations</div>
    <div class="panel-body" style="margin-left: 2%">
        <form action="./src/updateStoreMatiere.php?id=<?php echo $id ?>" method="POST">
            <div class="form-group">
                <label for="Nom">Nom Matiere:</label>
                <input type="text" class="form-control"  placeholder="nom..." value="<?php echo $listArray['libelle']; ?>" name="nom">
            </div>
            <div class="form-group">
                <label for="coef">Adresse</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="coefficient" value="<?php echo $listArray['coef']; ?>" name="coef">
            </div>
           
            <input type="submit" value="Modifier" class="btn btn-success">
        </form>
    </div>
    <div class="panel-footer">Modification</div>
</div>