<?php
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} 
else {
    $nbvisites = 1;
}
setcookie('nbvisites', $nbvisites, time() + 365*24*3600);

if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 365*24*3600);
    $nbvisites = 0;
}

echo 'Nombre de visites : ' . $nbvisites;
?>

<!DOCTYPE html>
<html lang="en">
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