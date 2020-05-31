<?php
for($i = 0; $i < 10; $i++){
    echo $i;
}
$height =160;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
$height = 230;
if ($height < 150) {
    echo "150未満の方はご乗車できません。";
} else if ($height >= 200) {
    echo "200以上の方はご乗車できません";
} else {
    echo "ご乗車できます";
}
$weekday = "月曜";
switch ($weekday) {
    case "月曜":
        echo "可燃ごみの日です。";
        break;
        case "水曜":
            echo "資源ごみの日です。";
            break;
            default:
                echo "回収はありません。";
                break;
}
// さーさん可愛すぎる

$fruits = array("apple", "orange", "lemon");
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
//課題１
$name = "Takeru";
if ($name = "Takeru") {
    echo "私はあなたの名前です。";
} else {
    echo "あなたの名前ではありません。";
}
//課題２
$total = 0;
echo $total;
for ($r = 0; $r <=10000; $r++) {
    $total += $r;
}
echo $total;
//課題３
$fruits = array("orange", "apple", "banana", "peach", "strawberry");
foreach($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}
//課題４

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}