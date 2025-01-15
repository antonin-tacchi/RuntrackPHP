<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";
$longueur = 0;
while (isset($str[$longueur])) {
    $longueur++;
}
$chaineInversee = '';
for ($i = $longueur - 1; $i >= 0; $i--) {
    $chaineInversee .= $str[$i];
}
echo $chaineInversee;
?>