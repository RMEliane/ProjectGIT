<?php
if(isset($_POST['user'])and isset($_POST['pass'])){
    if(!empty($_POST['user']) and !empty($_POST['pass'])){
?>
      <div class="alert alert-success" role="alert">
            <h4>Vous êtes connecté</h4>
        </div>
        
        <?php 
        header("location:./page.php"); 
        ?>
<?php
}
else{
?>
        <div class="alert alert-danger" role="alert">
            <h4>Champ doit être obligatoire!!!</h4>
        </div>
<?php
}
}
?>


<div class="panel panel-info" style="width: 60%">
    <div class="panel-heading" style="text-align: center"><h4>Utiliser l'application pour la gestion de note </h4></div>
  <div class="panel-body">
      <form class="form-group" method="POST" action="">
          
          <label>Nom d'utilisateur:</label>
          <input type="text" name="user" class="form-control">
          <label>Mot de passe:</label>
          <input type="password" name="pass" class="form-control">


          <label>Type d'utilisateur:</label>
          <select onchange="handleChange(this)" class="form-control" style="{ -moz-text-align-last: center; text-align-last:center; text-align:center;}" name="annee">
              <option >(Veuillez choisir votre type d'utilisateur)</option>
              <option >Administrateur</option>
              <option >Scolarite</option>
              <option >Enseignant</option>
              <option >Etudiant</option>

  
          </select>
          <div style="margin-top: 20px;">
              <input type="submit" value="Se connecter" class="btn btn-default">
          </div>
      </form>
  </div>
</div>