<?php
$id = $_POST["id"];
$password = $_POST["password"];
$message = "NG";

if ($id === "Andy" && $password === "secret") {
    // $message = "OK";

    session_start();
    $_SESSION["id"] = $id;
    $_SESSION["time"] = date("Y-m-d H:i:s");

    header("Location: menu.php");
} else {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Login <?php echo $message; ?></h1>
</body>
</html>