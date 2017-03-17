<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 03/02/2017
 * Time: 11:14
 */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pokedex;charset=utf8', 'root', '');
}
catch (Exeption $e){
    die("Erreur : " . $e->getMessage());
}
///* définition des ID de Connection mysql */
//$serveur = "localhost";
//$base = "pokedex";
//$user = "root";
//$pass = "";
///*Connection au serveur : */
//$mysqli = new mysqli($serveur, $user, $pass, $base);
//$mysqli->set_charset("utf8");
///*
//utilisation de la méthode connect_error
//qui renvoie un message d'erreur si la connexion échoue
//*/
//if ($mysqli->connect_error) {
//    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
//}
?>

