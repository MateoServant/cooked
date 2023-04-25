<!DOCTYPE html> <!-- page de dormulaire d'inscription-->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/componant/inscr.css">
    <title>inscription</title>
</head>
<body>
    <header>
      

    </header>

<?php

// se connecter a une base de donnee
$pdo = new PDO('mysql:host=localhost;dbname=cooked','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// je verifie en affichant ol'objet
//$pdo -> exec('INSERT INTO clients (pseudo, email , ville , pays, mdp) VALUES ("Aleandre", "Dupond@gmail.com", "madrid", "espagne", "tibo")');
// si le formulaire à ete posté
//if($_POST) {
    // je gere le pb d'apostrophe
    //$_POST['nom'] = addslashes($_POST['nom']);
   // $_POST['prenom'] = addslashes($_POST['prenom']);
    //$_POST['pseudo'] = addslashes($_POST['pseudo']);
   // $_POST['mail'] = addslashes($_POST['mail']);
    //$_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    // j'enregistre les info dans la base
    //$pdo->exec("INSERT INTO clients (nom, prenom, pseudo ,mail, mdp) VALUES ('$_POST[nom]','$_POST[prenom]','$_POST[pseudo]','$_POST[mail]','$_POST[mdp]')");
//}

?>

<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie ! cliquez sur le bouton connexion pour vous connecter !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>





<main>
        <section class="vh-100">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 text-black">
          
                  <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i> <br><br><br>
                    <span class="h1 fw-bold mb-0" class="cook">Cook Connect</span>
                  </div>
                  
                  

                  
      
                    
        
              
       <section class="form"> 
            <form action="inscription_traitement.php" method="post">
                <h2 class="text">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" minlength="7" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required"minlength="7" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div> 
                <div class="form-group">
                    <button  class="btn btn-primary btn-block"><a class="a"href="index.php">Connexion</button>
                </div>    
            </form>
        </div>
        </section>
        
    </main>

    <footer>



    </footer>

    <script src="scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
