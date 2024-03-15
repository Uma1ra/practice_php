<?php
$file = "score.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);

echo array_sum($lines);