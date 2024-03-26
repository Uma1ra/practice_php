<?php
$scores = [90, 72, 58, 80];
$total = array_sum($scores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_web_tr2</title>
</head>
<body>
    <h1>Scores</h1>
    <hr>
    <ul>
        <?php 
        foreach ($scores as $value) {
        ?>

        <li><?php echo $value; ?></li>

        <?php
        }
        ?>
    </ul>

    <p>Total: <?php echo $total; ?></p>
</body>
</html>