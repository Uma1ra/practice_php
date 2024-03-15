<?php
$names = ["Andy", "Betty"]; // 入れたいデータを配列で用意
$file = "names.txt"; // 入れるファイルを用意
$handle = fopen($file, "w"); // 上書きでアクセス

foreach ($names as $value) {
    fwrite($handle, $value . PHP_EOL); // 配列要素を一つずつ書き込んでく
}

fclose($handle);