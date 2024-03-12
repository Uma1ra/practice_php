<?php
// name = "Andy";
// エラー文
// PHP Parse error:  syntax error, unexpected token "=" in /var/www/practice_php/public/var3.php on line 2

// $2name = "Betty";
// エラー文
// PHP Parse error:  syntax error, unexpected integer "2", expecting variable or "{" or "$" in /var/www/practice_php/public/var3.php on line 6

$name = "Andy";
$name2 = "Betty";
$all-names = $name . $name2;
// エラー文
// PHP Parse error:  syntax error, unexpected token "=" in /var/www/practice_php/public/var3.php on line 12

echo $all-names;