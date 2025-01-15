<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$longueur = 0;
while (isset($str[$longueur])) {
    $longueur++;
}
$nouvelleChaine = '';
for ($i = 0; $i < $longueur - 1; $i++) {
    $nouvelleChaine .= $str[$i + 1];
}
$nouvelleChaine .= $str[0];
echo $nouvelleChaine;
?>