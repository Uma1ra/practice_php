<?php
    session_start();
    $id = $_SESSION["id"];
    $time = $_SESSION["time"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_menu</title>
</head>
<body>
    <h3>Menu - Hello <?php echo $id; ?></h3>
    <hr>Login at <?php echo $time; ?>
    <ul>
        <li>ToDo</li>
    </ul>
</body>
</html>