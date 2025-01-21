<?php
function occurrences(string $str, string $char): int {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count:
}

$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrence de '$char' dans '$str' est de " . occurrences($str, $char);
?>