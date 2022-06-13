<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。

$array = [10, 60, 90, 70, 50];

foreach ($array as $value) {
    if ($value >= 80) {
        $result = '優';
    } elseif ($value >= 60) {
        $result = '良';
    } elseif ($value >= 40) {
        $result = '可';
    } else {
        $result = '不可';
    }

    echo $value . '点は' . $result . 'です。' . "<br>";
}

// うまく行かなくて時間かかったもの
// おそらくifのところを$arrayにしてたから、配列全部を毎回処理してて全部「優」になってしまったみたい
// foreach ($array as $value) {
//     if ($array >= 80) {
//         $result = '優';
//     } elseif ($array >= 60) {
//         $result = '良';
//     } elseif ($array >= 40) {
//         $result = '可';
//     } else {
//         $result = '不可';
//     }
//     echo $value . '点は' . $result . 'です。' . "<br>";
// }
