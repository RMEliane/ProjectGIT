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

        
        <div class="bs-callout bs-callout-info" id="conteneur" style="min-height:  500px; margin-left: 10px;">
            <center>
            <?php 
                include('./src/authentification.php');
            ?>
            </center>
        </div>
        
        
        <div><?php include("./include/pied.php"); ?></div>
        <script src="Web/jquery.js" type="text/javascript"></script>
        <script src="Web/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
