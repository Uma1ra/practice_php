<?php

$scores = [
    [90, 88, 80],
    [64, 72, 72],
    [90, 92, 94]
];

$file = "score.csv";
$handle = fopen($file, "w");

foreach ($scores as $value) {
    $line = implode(",", $value); // 配列を文字列に変換してあげる
    fwrite($handle, $line . PHP_EOL); // 引数として配列はNG、文字列に変換したものを書き込む
}
fclose($handle);