<?php
$diceA = 4;
$diceB = 3;

if ($diceA >= 4 || $diceB >= 4) { //  あるいは（どちか1つの条件が成立してればいい）
    echo "Win";
} else {
    echo "Lose";
}