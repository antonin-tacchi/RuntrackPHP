<?php
session_start();
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
else {
    $_SESSION['nbvisites']++;
}
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
echo 'Nombre de visites : ' . $_SESSION['nbvisites'];

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
    <button type="submit" name='reset'>Reset</button>
</form>
</body>
</html>