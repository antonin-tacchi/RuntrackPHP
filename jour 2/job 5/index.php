<?php
$nombre = 0;
while ($nombre < 101) {
    $estPremier = true;
    for ($i = 2; $i <= $nombre / 2; $i++) {
        if ($nombre % $i == 0) {
            $estPremier = false;
            break;
        }
    }
    if ($estPremier && $nombre > 1) {
        echo ($nombre) . "</br>";
    }
    $nombre++;
}
?>