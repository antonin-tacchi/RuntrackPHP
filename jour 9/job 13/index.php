<?php
$pdo = new PDO('mysql:host=localhost;dbname=jour 8', 'root', '');
$sql = "SELECT salles.nom AS nom_salle, étage.nom AS nom_étage FROM salles JOIN étage ON salles.id_etage = étage.id";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($result) > 0) {

    echo "<table border='1'>";

    echo "<thead><tr>";
    foreach (array_keys($result[0]) as $field) {
        if ($field !== 'ID') {
            echo "<th>" . htmlspecialchars($field) . "</th>";
        }
    }
    echo "</tr></thead>";

    echo "<tbody>";
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            if ($key !== 'ID') {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>