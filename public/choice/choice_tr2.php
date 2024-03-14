<?php
$scores = [90, 72, 58, 80];

for ($i = 0; $i < count($scores); $i++) { 
    $score = $scores[$i];
    echo $score . " : ";
    if ($score >= 80) {
        echo "A" . PHP_EOL;
    } else if ($score >= 60) {
        echo "B" . PHP_EOL;
    } else {
        echo "C" . PHP_EOL;
    }
}