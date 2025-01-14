<?php
$data = [
    ["Type" => "A", "Nom" => "UN", "Valeur" => 1],
    ["Type" => "B", "Nom" => "DEUX", "Valeur" => 2],
    ["Type" => "C", "Nom" => "TROIS", "Valeur" => 3],
    ["Type" => "D", "Nom" => "QUATRE", "Valeur" => 4],
];

echo "<table border='1'>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row["Type"] . "</td>";
    echo "<td>" . $row["Nom"] . "</td>";
    echo "<td>" . $row["Valeur"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>



