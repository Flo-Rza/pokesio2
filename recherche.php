<!doctype html>
<html lang="fr">
<head>
    /* importation de bootstrap */
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PokeSIO - Recherche</title>
    <?php
    require_once ("function.php"); /*requierement du fichier function */
    $recherche = ucfirst($_GET ['recherche']); /* recuperation de la variable*/
    ?>
</head>
<body>
    <h1>Vous avez recherché : <?php echo $recherche ?></h1><br>
    <form action="index.php">
        <input type="submit" value="Accueil">
    </form>
<?php
$resultat = $bdd->query('SELECT * FROM pokemon WHERE nom = "'.$recherche.'" ;');/* requete sql */
?>
<table class="table">
    <?php
while($donnees = $resultat->fetch())
{
    ?>

    <tr>
        <td>Nom</td>

    </tr>
    <tr>
        <td><?php echo'<a href="detail.php?id='.$donnees['id'].'">'.$donnees['nom'].'</a>'/*lien en rapport avec la recherche*/ ?></td>
    </tr>
    </table>
<?php
}
?>
</body>
</html>