
        <nav class="navbar navbar-default" style="height: 20px" id="navBar">
            <div class="container-fluid" style="margin-top: 2px">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="page.php">Acceuil</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="page.php?Op_Et=0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Etudiants<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="page.php?Op_Et=0">Inscription d'un étudiant</a></li>
                                <li><a href="page.php?Op_Et=1">Liste des étudiants</a></li>
                                <li><a href="page.php?Op_Et=2">Mise à jour étudiant</a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="page.php?Op_Mat=0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Matieres<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="page.php?Op_Mat=0">Ajout de Matière</a></li>
                                <li><a href="page.php?Op_Mat=1">Liste des Matières</a></li>
                                <li><a href="page.php?Op_Mat=2">Mise à Jour des Matières</a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>
                    </ul>
                    
                    
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="page.php?Op_Note=0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notes<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="page.php?Op_Note=0">Notation</a></li>
                                <li><a href="page.php?Op_Note=1">Listes des Notes</a></li>
                                <li><a href="page.php?Op_Note=2">Mise à Jour des Notes</a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" method="get" role="search" action="page.php?q=0"s>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search..." id="search" name="q">
                        </div>
                        <button type="submit" class="btn btn-default">Chercher un étudiant</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="page.php?buletin=0">Bulettin des Notes</a></li>
                        <li><a href="page.php?class=0">Classement des Etudiants</a></li>
                        <li><a href="index.php">Se Déconnecter</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
<?php
    
?>