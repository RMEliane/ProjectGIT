<!DOCTYPE html>

<html>
     <head>
         <meta charset="UTF-8">
       <title>Gestion de Note 2020</title>
       <link rel="stylesheet" href="Web/docs.css" />
        <link rel="stylesheet" href="Web/bootstrap-responsive.css" />
        <link rel="stylesheet" href="Web/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="Web/bootstrap-theme.css" />
        <link rel="stylesheet" href="Web/bootstrap.css" />
        <link rel="stylesheet" href="Web/bootstrap.min.css" />
        <link rel="stylesheet" href="Web/style.css" />
       
        
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
    <body>
        <div><?php include("./include/tete.php"); ?></div>
        
        <div class="bs-callout bs-callout-info" id="conteneur" style="min-height:  500px; margin-left: 10px;">
            <?php 
            
            if(isset($_GET['Op_Et'])){
                if($_GET['Op_Et']==1){
                 include("./src/ListEtudiants.php");//liste etudiant
                }else if($_GET['Op_Et']==0){
                    include("./src/ajouterEtudiants.php");//ajouter etudiant
                }else{
                    include("./src/miseAjourEtudiants.php");//ajouter etudiant
                }
            }
            
            //-------------------note-------------------------
            if(isset($_GET['Op_Note'])){
                
                if($_GET['Op_Note']==1){
                    include("./src/ListNote.php");
                }  else if($_GET['Op_Note']==0) {
                    include("./src/createNotes.php");
                }else{
                    include("./src/miseAjourNotes.php");
                }
                    
            }
            
            
            //--------------------matiere----------------------------
            if(isset($_GET['Op_Mat'])){
                if($_GET['Op_Mat']==1){
                    include('./src/ListMatieres.php');
                }else if($_GET['Op_Mat']==0){
                    include('./src/createMatiere.php');
                }else{
                    include('./src/miseAjourMatiere.php');
                }
            }
             if(isset($_GET['conf'])){
                include('./src/comfirmation.php');
            }
            
             if(isset($_GET['update'])){
                include('./src/updateEtudiant.php');
            }
            
            if(isset($_GET['updateMatiere'])){
                include('./src/updateMatiere.php');
            }
            if(isset($_GET['confMatiere'])){
                include('./src/comfirmationMatiere.php');
            }
            
            if(isset($_GET['confNote'])){
                include('./src/comfirmationNote.php');
            }
            
            if(isset($_GET['updateNote'])){
                include('./src/updateNote.php');
            }
            
             if(isset($_GET['q'])){
                include('./src/Search.php');
            }
            
            if(isset($_GET['buletin'])){
                include('./src/Buletin.php');
            }
            
            if(isset($_GET['class'])){
                include('./src/ClassementEtudiant.php');
            }
           
            ?>
        </div>
        
        
        <div><?php include("./include/pied.php"); ?></div>
        <script src="Web/jquery.js" type="text/javascript"></script>
        <script src="Web/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
