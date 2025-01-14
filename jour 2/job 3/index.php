<?php
$nombre = 0;
while ($nombre < 101) {
    if ($nombre <= 20)
        echo '<em>'.($nombre).'</em>' . "</br>";
    elseif ($nombre == 42)
        echo "La Plateforme_" . "</br>";
    elseif ($nombre <= 50 and $nombre >= 25)
        echo '<u>'.($nombre).'</u>' . "</br>";
    else {
        echo $nombre . "</br>";
    }
    $nombre++;
}
?>