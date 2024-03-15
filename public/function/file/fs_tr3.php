<?php
$file = "score.csv";
$lines = file($file, FILE_IGNORE_NEW_LINES);

$total = 0;
foreach ($lines as $value) {
    $score = explode(",", $value);
    $total += array_sum($score);
    
}
echo $total;
// for  ($i = 0 ; $i < count($lines); $i++) { 
//     $line = $lines[$i];
//     $score = explode(",", $line);
//     $scores[] = $score;
// }

// print_r($scores) . PHP_EOL;
// echo array_sum($scores);