<?php
    $num1 = (int)filter_input(INPUT_POST, "x");
    $num2 = (int)filter_input(INPUT_POST, "y");
    $total = $num1 + $num2;
    $display_calc = $num1 . " + " . $num2 . " = " . $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_web_tr4</title>
</head>
<body>
    <h3>Calc</h3>
    <hr>
    <p>
        <?php echo $display_calc; ?>
    </p>
</body>
</html>