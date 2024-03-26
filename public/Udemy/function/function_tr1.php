<?php
function double($x) {
    return $x * 2;
}
$scores = [90, 72,  58];

foreach ($scores as $value) {
    echo double($value) . PHP_EOL;
}