<?php
$scores = [90, 72, 58, 80];
$file = "score.txt";
$handle = fopen($file, "w");

foreach ($scores as $value) {
    fwrite($handle, $value . PHP_EOL);
}

fclose($handle);