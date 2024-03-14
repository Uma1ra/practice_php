<?php
$students = [
    ["name" => "Andy", "age" => "20"],
    ["name" => "Betty", "age" => "19"],
    ["name" => "Carol", "age" => "21"]
];
// var_dump($students);

for ($i = 0; $i < count($students); $i++) { 
    if ($students[$i]["age"] >= 20) { // 各生徒の"age"が20以上の場合
        echo "Hello ";
        echo $students[$i]["name"] . PHP_EOL; // 各生徒の"name"を出力
    }
}