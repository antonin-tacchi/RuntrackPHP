<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Maison en PHP</title>
</head>
<body>
    <h1>Générateur de Maison</h1>
    <form method="POST">
        <p>Largeur :</p>
        <input type="number" id="width" name="width" min="3" required>
        <br><br>
        <p>Hauteur :</p>
        <input type="number" id="height" name="height" min="2" required>
        <br><br>
        <button type="submit">Afficher la maison</button>
    </form>

    <div id="output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $width = intval($_POST['width']);
            $height = intval($_POST['height']);

            if ($width < 3 || $height < 2) {
                echo "La largeur doit être au moins de 3 et la hauteur de 2.";
                return;
            }

            $house = "";

            // Calcul manuel de la hauteur du toit
            $roofHeight = ($width % 2 === 0) ? $width / 2 : ($width + 1) / 2;

            // Génération du toit
            for ($i = 0; $i < $roofHeight; $i++) {
                $line = "";

                // Ajout des espaces avant le début du toit
                for ($j = 0; $j < $roofHeight - $i - 1; $j++) {
                    $line .= " ";
                }

                // Ajout du côté gauche du toit "/"
                $line .= "/";

                // Ajout des espaces à l'intérieur du toit
                for ($j = 0; $j < $i * 2; $j++) {
                    $line .= "";
                }

                // Ajout du côté droit du toit "\"
                $line .= "\\";

                $house .= $line . "\n";
            }

            // Génération des murs
            for ($i = 0; $i < $height; $i++) {
                $line = "|";

                // Ajout des espaces entre les murs
                for ($j = 0; $j < $width - 2; $j++) {
                    $line .= " ";
                }

                $line .= "|";
                $house .= $line . "\n";
            }

            // Génération du sol
            $floor = "";
            for ($i = 0; $i < $width; $i++) {
                $floor .= "-";
            }
            $house .= $floor . "\n";

            // Affichage de la maison
            echo "<pre>" . $house . "</pre>";
        }
        ?>
    </div>
</body>
</html>
