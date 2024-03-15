<?php
function greet($name) {
    return "Hello $name" . PHP_EOL; // ""を使用して文字列と一緒の変数を読み解けるようにしてる
}

$message = greet("Andy");
echo $message;