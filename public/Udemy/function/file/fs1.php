<?php
// $str = "Hello World" . PHP_EOL;
// $str = "Hello PHP" . PHP_EOL; // 上書きできる
$str = "Hello World" . PHP_EOL;
$file = "hello.txt";

file_put_contents($file, $str, FILE_APPEND);
// 引数1→ファイル名、引数2→出力データ（上書きも可能）、引数3→FILE_APPENDを使用するとデータを上書きせず追加できる