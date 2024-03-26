<?php
$student = ["name" => "Andy", "age" => "20"];
$student["height"] = 180; // 既存の配列に新しいキーと値を要素を追加

echo $student["height"].PHP_EOL;
echo count($student) . PHP_EOL; // 配列の要素の数を確認