<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="Post">
    <p>Nom d'utilisateur</p>
    <input type="text" id="utilisateur" name="utilisateur" placeholder="Entrer votre Nom d'utilisateur">
    <p>Mot de Passe</p>
    <input type="password" id="mdp" name="mdp" placeholder="Entrer votre Mot de Passe">
    <button type="submit">Envoyer le message</button>
</form>
</body>
</html>

<?php
        if ($_POST["utilisateur"] == 'John' && $_POST["mdp"] == 'Rambo') {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
?>