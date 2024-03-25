<?php
    $file = "chat.txt";
    $messages = file($file, FILE_IGNORE_NEW_LINES);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $message = (string)filter_input(INPUT_POST, "message");
        
        if ($message !== "") {
            $messages[] = $message;
            file_put_contents($file, $message . PHP_EOL,FILE_APPEND | LOCK_EX);
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_chat</title>
</head>
<body>
    <h3>Chat</h3>
    <hr>
    <form action="chat.php" method="post">
        <input type="text" name="message">
        <input type="submit" value="Send">
    </form>

    <ul>
        <?php
            foreach ($messages as $message) {
        ?>
        <li><?php echo htmlspecialchars($message); ?></li>
        <?php
            }
        ?>
    </ul>
</body>
</html>