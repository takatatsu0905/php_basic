<?php
// 以下をfor文を使用して表示してください。

// 123
// *12
// **1

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= 3-$i; $j++) {
        echo "*";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }
    echo "<br>";
}
