<?php
$diceA = 6;
$diceB = "6";

if ($diceA === $diceB) { // データ型まで判定がある（相互変換が行われない）結果→偽/false
    echo "Win";
} else {
    echo "Lose";
}