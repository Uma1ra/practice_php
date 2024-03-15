<?php
$file = "hello.txt";
$array = file($file, FILE_IGNORE_NEW_LINES); // 引数1→ファイル名、引数2→改行を削除

print_r($array);