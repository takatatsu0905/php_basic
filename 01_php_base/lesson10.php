<?php
// 今日の日付けを以下の形式で表示してください。
// xxxx年xx月xx日（x曜日）

$today = date("Y-m-d");
$daty = date("w");

$week = ['日','月','火','水','木','金','土'];


echo $today . "(" . $week[$daty] . "曜日" . ")";
