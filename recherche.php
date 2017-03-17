<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PokeSIO - Recherche</title>
    <?php
    require_once ("function.php");
    $recherche = ucfirst($_GET ['recherche']);
    ?>
</head>
<body>
    <h1>Vous avez recherché : <?php echo $recherche ?></h1><br>
    <form action="index.php">
        <input type="submit" value="Accueil">
    </form>
<?php
$resultat = $bdd->query('SELECT * FROM pokemon WHERE nom = "'.$recherche.'" ;');
//$resultat = mysqli_query($mysqli, 'SELECT * FROM pokemon WHERE nom = "'.$recherche.'" ');
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
        <td><?php echo'<a href="detail.php?id='.$donnees['id'].'">'.$donnees['nom'].'</a>'?></td>
    </tr>
    </table>
<?php
}
?>
</body>
</html>