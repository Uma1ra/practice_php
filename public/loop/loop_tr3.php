<?php
$points = [10, 20, 30];
$total = 0;

for ($i = 0; $i < count($points); $i++) { 
    $total += $points[$i]; // 上書き代入を繰り返して合計を求めた
}
echo $total . PHP_EOL;