<?php
$colors = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors); $i++) { 
    $number = $i + 1; // 0から始まるため「+1」
    echo $number . ":" . $colors[$i] . PHP_EOL;
}