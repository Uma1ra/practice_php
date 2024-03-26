<?php
$fp = fopen("scores.csv", "r");
$scores = [];
$line = fgetcsv($fp);

while ($line !== false) {
    $score = [];
    $score["subject"] = $line[0];
    $score["name"] = $line[1];
    $score["score"] = $line[2];
    $scores[] = $score;

    $line = fgetcsv($fp);
}
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_web_tr3</title>
</head>
<body>
    <h3>Scores</h3>
    <hr>
    <table border="1">
        <tr>
            <th>Subject</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php
            foreach ($scores as $score) { 
        ?>
        <tr>
            <td><?php echo htmlspecialchars($score["subject"]); ?></td>
            <td><?php echo htmlspecialchars($score["name"]); ?></td>
            <td><?php echo htmlspecialchars($score["score"]); ?></td>
        </tr>
        <?php  
            }
        ?>
    </table>
</body>
</html>