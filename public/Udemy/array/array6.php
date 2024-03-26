<?php
$names = ["Andy", "Betty", "Carol"];
$names[1] = "Dave"; // 既に存在する要素番号なので置き換えてる
// 存在しない要素番号なら新しく追加される
// 連番でなくても良い

// echo $names[0];
// echo $names[1];
// echo $names[2];

var_dump($names);