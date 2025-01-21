<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Transformations</title>
    <style>
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Transformations de texte</h1>
    <form id="transformationForm">
        <label for="textInput">Entrez une chaîne de caractères :</label><br>
        <input type="text" id="textInput" required><br><br>

        <label for="transformationSelect">Choisissez une transformation :</label><br>
        <select id="transformationSelect" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <button type="button" onclick="applyTransformation()">Valider</button>
    </form>

    <h2>Résultat :</h2>
    <p id="result"></p>

<?php
$text = '';
$transformation = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] ?? '';
    $transformation = $_POST['transformation'] ?? '';
    if ($transformation === 'gras') {
        $result = preg_replace('/\b([A-Z][a-z]*)\b/', '<span class="bold">$1</span>', $text);
    } elseif ($transformation === 'cesar') {
        $shift = 2;
        $result = '';
        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            if ($char >= 'a' && $char <= 'z') {
                $result .= chr(((ord($char) - 97 + $shift) % 26) + 97);
            } elseif ($char >= 'A' && $char <= 'Z') {
                $result .= chr(((ord($char) - 65 + $shift) % 26) + 65);
            } else {
                $result .= $char;
            }
        }
    } elseif ($transformation === 'plateforme') {
        $result = preg_replace('/\b(\w*me)\b/', '$1_', $text);
    }
}
?>
</body>
</html>

