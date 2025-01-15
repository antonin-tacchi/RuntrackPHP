<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0,
];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
for ($i = 0; isset($str[$i]); $i++) {
    $caractere = $str[$i];
    $estVoyelle = false;
    for ($j = 0; isset($voyelles[$j]); $j++) {
        if ($caractere === $voyelles[$j]) {
            $estVoyelle = true;
            break;
        }
    }
    if (
        ($caractere >= 'a' && $caractere <= 'z') || 
        ($caractere >= 'A' && $caractere <= 'Z')
    ) {
        if ($estVoyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr></tbody>";
echo "</table>";
?>
