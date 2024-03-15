<?php
function calc($price, $tax) {
    $result = $price * $tax;
    return $result;
}

$price1 = calc(100, 1.08);
echo $price1 . PHP_EOL;

$price2 = calc(1000, 1.10);
echo $price2 . PHP_EOL;

// 税率も引数で渡せるようにしました