<?php
$file = "score.txt";
$handle = fopen($file, "r");
$line = fgets($handle);
$scores = [];

while ($line !== false) {
    $scores[] = trim($line); 
    $line = fgets($handle);
}

echo array_sum($scores);

fclose($handle);