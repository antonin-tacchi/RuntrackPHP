<?php
function bonjour(bool $jour) {
    if ($jour == true)
    echo "Bonjour"."</br>";
    else
    echo "Bonsoir";
    return $jour;
}
bonjour(true);
bonjour(false);
?>