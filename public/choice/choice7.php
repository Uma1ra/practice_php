<?php
$diceA = 6;
$diceB = "6";

if ($diceA == $diceB) { // データ型までの判定はない（相互変換が行われる）結果→真/true
    echo "Win";
} else {
    echo "Lose";
}