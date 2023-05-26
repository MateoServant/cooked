<?php

$bdd = new PDO('mysql:host=localhost;dbname=cooked', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$sup = "DELETE  FROM POSTE WHERE id_post=$_GET[id]";
$del = $bdd->prepare($sup);

$del->execute();

header('Location: index.php');

?>

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=cooked','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $sup = $pdo->query("DELETE FROM poste WHERE id_post='{$_GET['id']}'");
    $del = $sup;

    // exec de la requete 

    $del->execute();
    header('Location: landing.php');
    ?>
