<?php
$str = "Dans l'espace, personne ne vous entend crier";
$nombreCaracteres = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $nombreCaracteres++;
}
echo "Le nombre de caractères dans la chaîne est : $nombreCaracteres";
?>