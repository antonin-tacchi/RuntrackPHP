<?php
$str = "I'm sorry Dave i'm afraid i can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$resultat = '';

for ($i = 0; isset($str[$i]); $i++) {
    foreach ($voyelles as $voyelle) {
        if ($str[$i] === $voyelle) {
            $resultat .= $str[$i];
            break;
        }
    }
}

echo $resultat;
?>