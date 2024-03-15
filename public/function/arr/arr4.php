<?php
$array = ["Andy", "Betty", "Carol"];
// $sliced_array = array_slice($array, 1); // 引数1を取得したい開始位置
$sliced_array = array_slice($array, 1, 1); // 引数2には取得したい要素の数

print_r($sliced_array);