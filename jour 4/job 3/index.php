<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="Post">
    <p>Nom</p>
    <input type="text" name="nom" placeholder="Entrer votre Nom">
    <p>Prenom</p>
    <input type="text" name="prenom" placeholder="Entrer votre Prenom">
    <p>Email</p>
    <input type="text" name="email" placeholder="Entrer votre Email">
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

</body>
</html>

<?php
    $nombreArguments = 0;
    if (!empty($_POST)) {
        foreach ($_POST as $cle => $valeur) {
            $nombreArguments++; 
        }
    }

    echo "<p>Nombre d'arguments reçus : $nombreArguments</p>";
    ?>