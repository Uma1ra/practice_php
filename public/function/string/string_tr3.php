<?php
$str = "Hyper-Text-Markup-Language";
$array = explode("-", $str);

foreach ($array as $value) {
    echo substr($value, 0, 1);
}