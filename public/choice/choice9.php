<?php
$diceA = 6;
$diceB = "6";
$diceC = (int)$diceB; // 文字列だったものを整数のデータ型に変換して代入

if ($diceA === $diceC) { // どちらも整数の6になってる
    echo "Win";
} else {
    echo "Lose";
}