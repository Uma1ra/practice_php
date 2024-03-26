<?php
for ($i = 0; $i < 10; $i++) { 
    // $x = $i % 2;
    if ($i % 2 == 1) { // 基数の場合、最初戻る
        continue;
    }
    echo $i . PHP_EOL; // 結果として、偶数のみ出力される
}
echo "end" . PHP_EOL;