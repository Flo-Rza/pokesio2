<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pokedex;charset=utf8', 'root', ''); /* code pour la connexion au serveur */
}
catch (Exeption $e){
    die("Erreur : " . $e->getMessage());  /* message en cas d'erreur */
}
?>

