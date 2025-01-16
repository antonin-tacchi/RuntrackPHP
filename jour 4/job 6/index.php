<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="Get">
    <p>Nombre</p>
    <input type="text" id="nombre" name="nombre" placeholder="Entrer un Nombre">
        <button type="submit">Envoyer le message</button>
</form>

</body>
</html>

<?php
    $nombreArguments = 0;
    if ($_GET["nombre"] %2 == 1) {
        echo "Le nombre est impair";
    }
    else
        echo "Le nombre est pair";
    ?>