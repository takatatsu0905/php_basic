<?php
// 以下をfor文を使用して表示してください。

// 3
// 32
// 321

for ($i = 2; $i >= 0; $i--) {
    for ($j = 3; $j >= $i+1; $j--) {
        echo $j;
    }
    echo "<br>";
}
