<?php
session_start();
if (!isset($_SESSION['noms'])) {
    $_SESSION['noms'] = [];
}

if (isset($_POST['valide']) && !empty($_POST['nom'])) {
    $_SESSION['noms'][] = $_POST['nom'];
}
if (isset($_POST['reset'])) {
    $_SESSION['noms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="nom" placeholder="Nom">
    <button type="submit" name='valide'>Validé</button>
    <button type="submit" name='reset'>Reset</button>
</form>
<br>
<?php
if (!empty($_SESSION['noms'])) {
    foreach ($_SESSION['noms'] as $nom) {
        echo $nom . '<br>';
    }
}
?>
</body>
</html>