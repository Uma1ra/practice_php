<?php
$score = ["english" => 90, "math" => 88, "science" => 80];
// $total_score = array_sum($score); // 関数のが簡単だけど演習の意味がなくなるので
$total_score = $score["english"] + $score["math"] + $score["science"];

echo $total_score;