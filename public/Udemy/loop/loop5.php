<?php
for ($i = 0; $i < 10; $i++) { 
    if($i == 5) { // 5と同じになったらという条件が達成されたら
        break; // 処理を終了
    }
    echo $i . PHP_EOL;
}
echo "end" . PHP_EOL;