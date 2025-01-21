<?php
session_start();

if (isset($_SESSION['action'])) {
    if ($_SESSION['action'] === 'connexion' && isset($_POST['prenom'])) {
        setcookie('prenom', $_POST['prenom'], time() + 3600, '/');
        unset($_SESSION['action']);
    } elseif ($_SESSION['action'] === 'deconnexion') {
        setcookie('prenom', '', time() - 3600, '/');
        unset($_SESSION['action']);
    }
}

if (isset($_POST['connexion'])) {
    $_SESSION['action'] = 'connexion';
    header('Location: index.php');
    exit();
} elseif (isset($_POST['deco'])) {
    $_SESSION['action'] = 'deconnexion';
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])): ?>
        <h1>Bonjour <?= $_COOKIE['prenom'] ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
