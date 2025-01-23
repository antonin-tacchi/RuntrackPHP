<?php
$pdo = new PDO('mysql:host=localhost;dbname=jour 8', 'root', '');
$sql = "SELECT * FROM salles";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($result) > 0) {

    echo "<table border='1'>";

    echo "<thead><tr>";
    foreach (array_keys($result[0]) as $field) {
        if ($field !== 'id_etage' and $field !== 'ID') {
            echo "<th>" . htmlspecialchars($field) . "</th>";
        }
    }
    echo "</tr></thead>";

    echo "<tbody>";
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            if ($key !== 'id_etage' and $key !== 'ID') {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>