<?php
$nombre = 0;
while ($nombre < 1338) {
    if ($nombre == 42)
        echo '<span style="font-weight : bold;">'.($nombre).'</span>' . "</br>";
    else {
        echo $nombre . "</br>";
    }
    $nombre++;
}
?>
    