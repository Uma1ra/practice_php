<?php
$file = "score.csv";
$lines = file($file, FILE_IGNORE_NEW_LINES);

$total = 0;
foreach ($lines as $value) {
    $score = explode(",", $value);
    $total += array_sum($score);
    
}
echo $total;