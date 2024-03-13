<?php
$names = ["Andy", "Betty", "Carol"];

// 悪い例
// $names[0] = $names[2]; // この時点でAndyが消失
// $names[2] = $names[0]; // 既にCarolになってしまった[0]をCarolに代入している

// // 正しい例
$temp = $names[0]; // Andyを一時的に避難
$names[0] = $names[2]; // 代入してもAndyは無事
$names[2] = $temp; // 避難してたAndyを代入

var_dump($names);