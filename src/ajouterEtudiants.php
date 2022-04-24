<?php
include 'Classe/Base.php';
include 'Classe/Etudiant.php';
include 'include/menu.php';
?>

<?php
if(isset($_POST['nom'])and isset($_POST['adresse'])){
    if(!empty($_POST['nom']) and !empty($_POST['adresse'])){
        $etudiant = new Etudiant();
        $etudiant->add($_POST['nom'], $_POST['adresse'], $_POST['DateNaiss'], $_POST['sexe'], $_POST['annee']);
    
      ?>
      <div class="alert alert-success" role="alert">
            <h4>Enregistrement a ête bien succe!!!</h4>
        </div>
      <?php
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            <h4>Champ doit être obligatoire!!!</h4>
        </div>
<?php
    }
}

?>


<div class="panel panel-info" style="width: 60%">
    <div class="panel-heading" style="text-align: center"><h4>Formulaire d'inscription </h4></div>
  <div class="panel-body">
      <form class="form-group" method="POST" action="">
          
          <label>Nom Etudiant:</label>
          <input type="text" name="nom" class="form-control">
          <label>Adresse:</label>
          <input type="text" name="adresse" class="form-control">
          <label>Date de Naissance:</label>
          <input type="date" name="DateNaiss" class="form-control">
          <label>Sexe:</label>
          <select class="form-control" name="sexe">
              <option >Masculin</option>
              <option >Feminin</option>
          </select>
          <label>Année:</label>
          <select class="form-control" name="annee">
              <option >L1</option>
              <option >L2</option>
              <option >L3</option>
              <option >M1</option>
              <option >M2</option>
          </select>
          <div style="margin-top: 20px;">
              <input type="submit" value="Enregistrer" class="btn btn-default">
          </div>
      </form>
  </div>
</div>

