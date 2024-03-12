<?php
$name = "Andy";

$message1 = 'Hello $name'; // 変数として認識されてない
echo $message1;

$message2 = "Hello $name"; // 変数として展開できてる
echo $message2;