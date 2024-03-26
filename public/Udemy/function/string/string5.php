<?php
$array = ["Andy", "Betty", "Carol"];
$str = implode("-", $array);  // 引数1→挿入したいもの、引数2→使用する配列

echo $str . PHP_EOL; // 1つの文字列になったためechoで出力可