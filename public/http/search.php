<?php
$name = $_GET["name"];
$names = file("names.txt", FILE_IGNORE_NEW_LINES);

$searched_names = [];
if ($name !== "") {
    for ($i = 0; $i < count($names); $i++) { 
        if (strpos($names[$i], $name) !== false) {
            $searched_names[] = $names[$i];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_http_search</title>
</head>
<body>
    <h3>Search</h3>
    <hr>
    <ul>
        <?php
        foreach ($searched_names as $key => $value) {
        // for ($i = 0; $i < count($searched_names); $i++) {
        ?>
        <li><?php echo $searched_names[$key]; ?></li>
        <?php    
        }
        ?>
    </ul>
</body>
</html>