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
    /* obligation d'avoir le fichier function pour charger la page */
    require_once ("function.php");
    ?>
</head>
<body>
<h1>Recherche</h1><br>
<form action="recherche.php">
    <input type="search" placeholder="rechercher" name="recherche">
    <input type="submit" value="go" style="top-bar-button: ">
</form>
</body>
</html>


