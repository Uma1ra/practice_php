<?php
$i = 0;
while ($i < 3) { // 成立し続ける間繰り返される
// while ($i < 0) { // 成立するけど、一度だけ
// while ($i < 5) { // 成立しない
    echo $i . PHP_EOL;
    $i++;
}