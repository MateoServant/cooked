
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/componant/colonne.css">
        <link rel="stylesheet" href="css/componant/post.css">
        <script src="tag.js" defer></script>
        <script src="scrcipt.js" defer></script>
        <title>cook connect</title>
        <?php $date = date('m/d/Y h:i:s a', time());?>
        <?php $pdo = new PDO('mysql:host=localhost;dbname=cooked','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));?>
        <?php
            
        ?>

        
    </head>
    <body>
        <header>
            <nav class="navbar">
                <!-- LOGO -->
                <div class="logo">COOKED</div>
                
                <!-- NAVIGATION MENU -->
                <div class="nav-links">
                    <!-- USING CHECKBOX HACK -->
                    <input type="checkbox" id="checkbox_toggle">
                    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                    
                    <!-- NAVIGATION MENUS -->
                    <ul class="menu">
                        <li><a href="index.php" style="text-decoration:none">Home</a></li>
                        <li><a href="concept.html" style="text-decoration:none">concept</a></li>
                        <li><a href="cook.html" style="text-decoration:none">go cook</a></li>
                        <li><a href="/" style="text-decoration:none">catégories</a></li>

                        <li class="services">
                            <a href="/" style="text-decoration:none">Services</a>
                            <!-- DROPDOWN MENU -->
                            <ul class="dropdown">
                                <li><a href="landing.php" style="text-decoration:none">Profil</a></li>
                                <li><a href="/" style="text-decoration:none">Paramètre</a></li>
                                <li><a href="/" style="text-decoration:none">info</a></li>
                                <li><a href="/" style="text-decoration:none">contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main> 
        
                
            <div class="column1">
                <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=cooked','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    session_start();
                    $req = $pdo->prepare('SELECT pseudo FROM utilisateurs WHERE token = ?');
                    $req->execute(array($_SESSION['user']));                        $data = $req->fetch();
                            
                            // si le formulaire a été posté
                    if(isset($_FILES['file'])) {
                        $image = $_FILES['file']['name'];
                        $upload = "img/".$image;
                        move_uploaded_file($_FILES['file']['tmp_name'], $upload);
                    }

                    if(isset($_POST['message']) && isset($_POST['tag'])) {
                                // je gère le problème d'apostrophe  
                        $_POST['message'] = addslashes($_POST['message']);
                        $_POST['tag'] = addslashes($_POST['tag']);

                                // j'enregistre les infos dans la base
                        $pdo->exec("INSERT INTO poste (message, date, tag,src,pseudo) VALUES ('$_POST[message]', NOW(), '$_POST[tag]','$image','$data[pseudo]')");
                        header("Location: index.php");
                    }
                ?>
                    <div>
                        
                    <div class="slider">
                   
                        <h2 class="tags"> TAGS</h2>
                        <div class="slide">
                        
                        <form method="get" action="index.php" class="sup">
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button"" onclick="afficherMessagesPlats()" class="tagg">Asiatique</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesGateau()" class="tagg1">Gateau</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesPoulet()" class="tagg2">Poulet</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesVegan()" class="tagg3">Vegan</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesDessert()" class="tagg4">Dessert</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                       
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesPetite()" class="tagg5">Petite-faim</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesPizza()" class="tagg6">Pizza</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesSalade()" class="tagg7">Salade</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesFrance()" class="tagg8">France</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesEntree()" class="tagg9">Entrée</button>
                        </form>
                        <form method="get" action="index.php" class="sup">
                        <input type="hidden" name="recherche" value="<?php echo $recherche; ?>">
                        <button type="button" onclick="afficherMessagesEntree()" class="tagg">RESET</button>
                        </form>
                        </div>
                        </div>
                        </div>
                    <div class="resultats hide" id="resultatsAsiatique">


                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Asiatique'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Asiatique%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post10">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>       
                        </div>
                        
                        
                    <div class="resultats hide" id="resultatsGateau">


                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Gateau'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Gateau%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post1">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                    <div class="resultats hide" id="resultatsPoulet">


                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Poulet'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Poulet%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post2">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>
                    

                     
                    
                    <div class="resultats hide" id="resultatsVegan">


                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Vegan'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Vegan%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post3">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                            
                        </div>

                    <div class="resultats hide" id="resultatsDessert">


                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Dessert'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Dessert%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post4">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>


                            
                        </div>


                    <div class="resultats hide" id="resultatsPetiteFaim">


                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Petite-faim'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Petite-faim%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post5">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                       

                            
                        </div>
                    
                    
                    
                    <div class="resultats hide" id="resultatsPizza">
                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Pizza'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Pizza%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post6">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                        

                        
                        </div>
                    <div class="resultats hide" id="resultatsSalade">
                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Salade'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Salade%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post7">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                    
                        
                    <div class="resultats hide" id="resultatsFrance">
                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['France'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%France%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post8">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                      

                        
                        </div>
                    
                
                    <div class="resultats hide" id="resultatsEntrée">
                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET['Entree'])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%Entree%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post9">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" />  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>

                       

                        
                        </div>
                    <div class="resultats hide" id="Retour">
                        <?php
                        $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
                        $stmt = null; // Initialize the variable

                        if (isset($_GET[''])) {
                            $stmt = $pdo->prepare("SELECT * FROM poste WHERE tag LIKE :recherche AND tag LIKE '%%' ORDER BY DATE DESC");
                            $stmt->execute(array(':recherche' => '%' . $recherche . '%'));
                        }
                        ?>

                        <div class="resultats">
                            <?php
                            if ($stmt) {
                                // Créer la mise en page du résultat
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="top-post9">
                                        <div class="bot-post"> 
                                            <p class="pseudo-post"><?php echo $row['pseudo']; ?></p> 
                                            <p class="date-post"><?php echo '('.$row['date'].')'; ?></p>
                                        </div>
                                        <p class="tag-post"><?php echo $row['tag']; ?></p>
                                        <p class="message-post"><?php echo $row['message']; ?></p>
                                        <img class="imgpost" src="img/<?php echo $row['src']; ?>">
                                        <?php if ($row['pseudo'] === $row['pseudo']) { ?>
                                            <div class="pb">
                                                <a href="supprimer.php?id=<?php echo $row['id_post'] ?>">
                                                    <img src="img/poubelle.png" alt="Icône de poubelle" class="poubelle" >  
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } // Fermeture de la boucle while
                            } // Fermeture de la condition if
                            ?>
                        </div>
                        

                        
                        </div>
                </div>
                </div>
            </div>
                
        </main>
        <footer>
        <div>
                    <button type="button" class="bouton" onclick="togglePopup()">cook</button>
                    <div class="popup" id="popup">
                        <img class="img" src="img/croix.png" alt="fermer" onclick="togglePopup()">
                        <h2>let's cook</h2> 
                        <p>Partage tes meilleures recettes du moment avec tous tes amis.</p>
            
                        <form method="post" class="sup" id="myForm" enctype="multipart/form-data">
                            <textarea  class="message" name="message" id="message" placeholder="Message" required maxlength="290"></textarea>
                            <br>
                            <div class="tag" placeholder="tag" >
                                <label for="tag"></label>
                                <select name="tag" id="tag" class="tag-select">
                                    <option selected disabled>Choisie ta catégorie !</option>
                                    <option value="Plat asiatique">Asiatique</option>
                                    <option value="Gateau">Gateau</option>
                                    <option value="Poulet">Poulet</option>
                                    <option value="Vegan">Vegan</option>
                                    <option value="Dessert">Dessert</option>
                                    <option value="Entree">Entree</option>
                                    <option value="Petite-faim">Petite-faim</option>
                                    <option value="France">France</option>
                                    <option value="Salade">Salade</option>
                                    <option value="Pizza">Pizza</option>
                                </select>
                            </div>
                            <br>
                            <label for="file" class="label-fichier">Choisir un fichier</label>
                            <input class="fichier" id="file" type="file" name="file">
                            <br><br>
                            <input type="submit" value="Cook"> 
                        </form>
                    </div>
                </div>
        </footer>
    <script>
            let popup = document.getElementById("popup");

        function togglePopup() {
            popup.classList.toggle("open-popup");
        }

        function toggleResults() {
            var resultsDiv = document.querySelector('.resultats');
            resultsDiv.classList.toggle('hide');
        }
   
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>