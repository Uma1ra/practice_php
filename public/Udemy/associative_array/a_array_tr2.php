<?php
$scores = [
    ["english" => 90, "math" => 88, "science" => 80],
    ["english" => 64, "math" => 72, "science" => 72],
    ["english" => 90, "math" => 92, "science" => 94]
];
$math_total = 0;
for ($i = 0; $i < count($scores); $i++) { 
    $score = $scores[$i];
    $math_total += $score["math"];
    // foreach ($score as $key => $value) { // 自己流で複雑化してしまった...
    //     if ($key == "math") {
    //         $math_total += $value;
    //     }
    // }
}
echo $math_total . PHP_EOL;