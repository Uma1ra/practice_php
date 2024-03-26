<?php
$file = "score.csv";
$handle = fopen($file, "r");

$line = fgetcsv($handle);
$scores = [];
while ($line !== false) {
    $scores[] = $line;
    $line = fgetcsv($handle);
}
fclose($handle);

$total = 0;
foreach ($scores as $value) {
    $total += array_sum($value);
}
echo $total;