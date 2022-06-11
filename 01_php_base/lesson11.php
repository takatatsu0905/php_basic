<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

$date1 = new DateTime('2020-01-01');
$date2 = new DateTime('now');

$today = date("Y-m-d H:i:s");
$diff = $date1->diff($date2);

echo $today ."<br>";
echo $today = date("Y-m-d H:i:s", strtotime('+3 day'))."<br>";
echo $today = date("Y-m-d H:i:s", strtotime('-12 hours'))."<br>";
echo "2020年元旦から現在まで" . $diff->days . "日経過しています。";
