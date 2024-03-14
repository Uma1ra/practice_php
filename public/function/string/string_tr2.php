<?php
$colors = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors); $i++) { 
    echo substr($colors[$i], 0, 1); // 0文字から1文字までを取得
}

foreach ($colors as $value) {
    echo substr($value, 0, 1 );
}