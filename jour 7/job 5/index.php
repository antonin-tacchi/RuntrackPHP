    <?php
    session_start();
    if (!isset($_SESSION['grid'])) {
        $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
        $_SESSION['turn'] = 'X';
        $_SESSION['message'] = '';
    }
    if (isset($_POST['reset'])) {
        $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
        $_SESSION['turn'] = 'X';
        $_SESSION['message'] = '';
    }
    if (isset($_POST['cell'])) {
        $cell = explode(',', $_POST['cell']);
        $row = (int)$cell[0];
        $col = (int)$cell[1];

        if ($_SESSION['grid'][$row][$col] === '-' && $_SESSION['message'] === '') {
            $_SESSION['grid'][$row][$col] = $_SESSION['turn'];
            $_SESSION['turn'] = $_SESSION['turn'] === 'X' ? 'O' : 'X';
        }
        $winner = checkWinner($_SESSION['grid']);
        if ($winner) {
            $_SESSION['message'] = "$winner a gagné";
        } elseif (isFull($_SESSION['grid'])) {
            $_SESSION['message'] = "Match nul";
        }
    }

    function checkWinner($grid) {
        for ($i = 0; $i < 3; $i++) {
            if ($grid[$i][0] !== '-' && $grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2]) {
                return $grid[$i][0];
            }
            if ($grid[0][$i] !== '-' && $grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i]) {
                return $grid[0][$i];
            }
        }
        if ($grid[0][0] !== '-' && $grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2]) {
            return $grid[0][0];
        }
        if ($grid[0][2] !== '-' && $grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0]) {
            return $grid[0][2];
        }
        return null;
    }

    function isFull($grid) {
        foreach ($grid as $row) {
            if (in_array('-', $row, true)) {
                return false;
            }
        }
        return true;
    }
    ?>
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
</head>
<body>

    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['grid'][$i][$j] === '-'): ?>
                                <button type="submit" name="cell" value="<?= $i . ',' . $j ?>">-</button>
                            <?php else: ?>
                                <?= $_SESSION['grid'][$i][$j] ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>

    <div>
        <?= $_SESSION['message'] ?>
    </div>
</body>
</html>
