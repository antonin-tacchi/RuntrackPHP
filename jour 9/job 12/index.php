<?php
$pdo = new PDO('mysql:host=localhost;dbname=jour 8', 'root', '');
$sql = "SELECT PRENOM, NOM, NAISSANCE FROM étudiant where NAISSANCE between '1998-01-01' and '2018-12-31'";
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