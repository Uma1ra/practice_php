<?php
$countries = [
    "Japan" => ["Tokyo", "Osaka", "Nagoya"],
    "England" => ["London", "Birmingham", "Glasgow"],
    "France" => ["Paris", "Marseille", "Lyon"]
];

// foreach ($countries["England"] as $key => $value) { // 自己流、、いい気もするけどな～
//     echo $value . PHP_EOL;
// }
$cities_of_england = $countries["England"];
for ($i = 0; $i < count($cities_of_england); $i++) { 
    echo $cities_of_england[$i] . PHP_EOL;
}