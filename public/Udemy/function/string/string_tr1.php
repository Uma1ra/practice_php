<?php
$colors = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors); $i++) { 
    echo strtoupper($colors[$i]) . PHP_EOL;
}

// foreach ($colors as $value) {
//     echo strtoupper($value) . PHP_EOL;
// }