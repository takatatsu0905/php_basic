<?php
// 変数に値を代入し、
// その値が50より大きければ
// 「50より大きい」
// 50より小さければ
// 「50より小さい」
// 50と同値であれば
// 「50です」
// という文字列を出力してください。

// また最低限どういう値でテストすればいいか
// 確認したテスト値をコメントアウトですべて示してください。


// 同じ値の場合
$num = 50;

// 50より小さい場合
// $num = 25;

// 50より大きい場合
// $num = 65;

if ($num > 50) {
    echo $num."は50より大きいです";
} elseif ($num < 50) {
    echo $num."は50より小さいです";
} else {
    echo "50です";
}
