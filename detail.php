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
    $id = $_GET ['id'];
    ?>
</head>
<body>
<?php $resultat = $bdd->query('SELECT * FROM pokemon WHERE id = "'.$id.'" ;');?>
<?php $donnees = $resultat->fetch()?>
    <h1>Details de : <?php echo $donnees['nom']; ?></h1><br>
    <form action="index.php">
        <input type="submit" value="Accueil">
    </form>
<table class="table">
    <tr>
        <td>Nom</td>
        <td>Type</td>
        <td>Faiblesses</td>

    </tr>
    <tr>
        <td><?php echo $donnees['nom']; ?></td>
        <td><?php echo $donnees['type']; ?></td>
        <td><?php echo $donnees['faiblesses']; ?></td>
    </tr>
</table>
</body>
</html>