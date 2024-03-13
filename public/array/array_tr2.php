<?php
$colors = [];

// $colors[0] = "Red";
// $colors[1] = "Green";
// $colors[2] = "Blue";

array_push($colors, "Red", "Green", "Blue"); // idxの指定はないので今回はpushがベスト？
// array_splice($colors, 0, 0, array("Red", "Green", "Blue")); // idx指定でまとまったデータを挿入したい場合に有効な気がする

var_dump($colors);