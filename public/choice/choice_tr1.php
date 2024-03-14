<?php
$score = $argv[1]; // コマンドで情報が渡せる
// echo $score . PHP_EOL;
// var_dump($argv); // [0]には実行するファイル、[1]には渡したデータ

if ($score >= 80) {
    echo "$score : " . "A" . PHP_EOL;
} else if ($score >= 60) { // 「&& $score <= 79」は不要（上から条件が確認されるため）
    echo "$score : " . "B" . PHP_EOL;
} else { // 「else if ($score <= 59)」は不要（既に上記で条件が指定されているため、余ったものの確認だけでよい）
    echo "$score : " . "C" . PHP_EOL;
}