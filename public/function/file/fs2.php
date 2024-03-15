<?php
$file = "hello.txt";
$str = file_get_contents($file); // ファイル名を渡せば読み込んでくれて、出力データを代入

echo $str;