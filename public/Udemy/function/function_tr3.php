<?php
function search($search_from, $search_word) {
     for ($i = 0; $i < count($search_from); $i++) { 
        if ($search_from[$i] === $search_word) { // ===を使用する場合はargv[]の入力を整数に直す必要がある
            return true;
        }
     }
     return false; // for文で見つからない場合ここでfalseを返しとく
}

$scores = [90, 72, 58, 80, 66, 50];
$target = (int)$argv[1]; // 入力データは常に文字列であるため、今回の一致には整数に変換が必要

$found = search($scores, $target); // 結果はtrueやfalseで返ってくる
if ($found === true) {
    echo "Found" . PHP_EOL;
} else {
    echo "Not Found" . PHP_EOL;
}