<?php
$names = ["Andy", "Betty", "Carol"];

$i = 0;
// while ($i < 3) {
while ($i < count($names)){ // こっちの方が汎用的
    echo "Hello ";
    echo $names[$i] . PHP_EOL;
    $i++;
}