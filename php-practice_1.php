<?php
// Q1 変数と文字列
$name = '村山';

echo '私の名前は『' .$name. '』です。';

// Q2 四則演算
$num = 5*4;

echo $num ."\n";
echo $num/2;

// Q3 日付操作
$timestamp = strtotime('2019-5-23 14:48:22');

echo '現在時刻は、' .date('Y年m月d日 H時i分s秒', $timestamp). 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device == 'windows' or $device == 'mac') {
  echo '使用OSは、' .$device. 'です。';

}
else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 19;

$message = ($age < 18)? '未成年です。' : '成人です。';
echo $message

// Q6 配列
$prefecture = [
  '東京都',
  '千葉県',
  '埼玉県',
  '茨城県',
  '神奈川県',
  '栃木県',
  '群馬県',
  ];

echo $prefecture[2]. 'と' .$prefecture[3]. 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefecture =[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($prefecture as $key => $value){
echo $value."\n";
}

// Q8 連想配列-2
$prefecture =[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($prefecture as $key => $value){
  if ($value == 'さいたま市') {
      echo $key. 'の県庁所在地は、' .$value. 'です。';
      break;
  }
}


// Q9 連想配列-3
$prefecture =[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
  '北海道' => '札幌市',
  '沖縄県' => '那覇市'
];

foreach ($prefecture as $key => $value){
  if (
    $value == '新宿区' or
    $value == '横浜市' or
    $value == '千葉市' or
    $value == 'さいたま市' or
    $value == '宇都宮市' or
    $value == '前橋市' or
    $value == '水戸市'
  ) {
    echo $key. 'の県庁所在地は、' .$value. 'です。' . "\n";
    continue;
  }
  else {
      echo $key. 'は関東地方ではありません。' . "\n";
  }
}

// Q10 関数-1
function sayHello($name)
{
  return $name. 'さん、こんいちは。'."\n";
}

$helloKaoru = sayHello('かおる');
$helloAsuka = sayHello('あすか');
echo $helloKaoru;
echo $helloAsuka;

// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price*1.1;

  return $price. '円の商品の税込価格は' .$taxInPrice. '円です。';
}

$values1000 = calcTaxINPrice(1000);
echo $values1000;

// Q12 関数とif文
function distinguishNum($num)
  {
    if ($num % 2 == 0) {
    return $num. 'は偶数です。'."\n";
  }
  else {
    return $num. 'は奇数です。'."\n";
  }
}

$num221 = distinguishNum(211);
$num256 = distinguishNum(256);
echo $num221;
echo $num256;

// Q13 関数とswitch文
function evaluateGrade($grade)
{
  switch ($grade) {
    
    case 'A':
    case 'B':
      return '合格です。'."\n";
      break;

    case 'C':
      return '合格ですが追加課題があります。'."\n";
      break;

    case 'D':
      return '不合格です。'."\n";

    default:
      return '判定不明です。講師に問い合わせてください。'."\n";
        break;
  }
}

$gradeB = evaluateGrade('B');
$gradeComedian = evaluateGrade('小峠英二');
echo $gradeB;
echo $gradeComedian;



?>