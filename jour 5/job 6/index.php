<?php
function message($string) {
    $leetMapping = [
        'A' => '4', 'B' => '8', 'C' => '<', 'D' => 'D', 'E' => '3',
        'F' => 'F', 'G' => '6', 'H' => '#', 'I' => '1', 'J' => 'J',
        'K' => 'K', 'L' => '1', 'M' => 'M', 'N' => 'N', 'O' => '0',
        'P' => 'P', 'Q' => 'Q', 'R' => 'R', 'S' => '5', 'T' => '7',
        'U' => 'U', 'V' => 'V', 'W' => 'W', 'X' => 'X', 'Y' => 'Y', 'Z' => '2',
        'a' => '4', 'b' => '8', 'c' => '<', 'd' => 'd', 'e' => '3',
        'f' => 'f', 'g' => '6', 'h' => '#', 'i' => '1', 'j' => 'j',
        'k' => 'k', 'l' => '1', 'm' => 'm', 'n' => 'n', 'o' => '0',
        'p' => 'p', 'q' => 'q', 'r' => 'r', 's' => '5', 't' => '7',
        'u' => 'u', 'v' => 'v', 'w' => 'w', 'x' => 'x', 'y' => 'y', 'z' => '2'
    ];
    $leetString = '';
    $index = 0;
    while (isset($string[$index])) {
        $char = $string[$index];
        $leetString .= isset($leetMapping[$char]) ? $leetMapping[$char] : $char;
        $index++;
    }
    return $leetString;
}
$chaine = "Hello LaPlateforme!";
echo message($chaine); 
?>
