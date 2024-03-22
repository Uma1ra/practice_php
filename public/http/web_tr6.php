<?php
    $subject = $_GET["subject"];
    $handle = fopen("../web/scores.csv", "r");
    $line = fgetcsv($handle);
    $scores = [];
    while ($line !== false) {
        if ($subject === $line[0]) {
            $score = [];
            $score["subject"] = $line[0];
            $score["name"] = $line[1];
            $score["score"] = $line[2];
            $scores[] = $score;
        }
        $line = fgetcsv($handle);
    }

    fclose($handle);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_web_tr6</title>
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
            <td><?php echo $score["subject"]; ?></td>
            <td><?php echo $score["name"]; ?></td>
            <td><?php echo $score["score"]; ?></td>
        </tr>  
        <?php
            }
        ?>
    </table>
</body>
</html>