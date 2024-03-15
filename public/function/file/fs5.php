<?php
$file = "heloo.txt";
$handle = @fopen($file, "r"); // ファイルポインタを変数に代入
if ($handle === false) {
    die("can't open file");
}

$line = fgets($handle); // ファイルポインタを渡す
echo $line;

while (($line = fgets($handle)) !== false) { // データがある以上出力し続ける
    echo $line;
}

fclose($handle); // ファイルポインタは数に限りがあるので、使い終わったらcloseする