<?php
// Q1 tic-tac問題
echo '1から100までのカウントを始めます。'."\n";
echo "\n";

for ($num = 1; $num <= 100; $num++) {
  switch ($num)
  {
    case $num % 4 == 0 && $num % 5 == 0:
      echo 'tic-tac'."\n";
      break;
      
    case $num % 4 == 0:
      echo 'tic'."\n";
      break;

    case $num % 5 == 0:
      echo 'tac'."\n";
      break;

    default:
      echo $num."\n";
      break;
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 上記の配列を用いて下記のように表示してください。
// 出力結果
// Bさんの電話番号は08033334444です。
echo $personalInfos[1]['name']. 'の電話番号は' .$personalInfos[1]['tel']. 'です。';

// oreachを用いて下記のように表示してください。(数字が1から始まっていることに注意しましょう)
// 出力結果
// 1番目のAさんのメールアドレスはaaa@mail.comで、電話番号は09011112222です。
// 2番目のBさんのメールアドレスはbbb@mail.comで、電話番号は08033334444です。
// 3番目のCさんのメールアドレスはccc@mail.comで、電話番号は09055556666です。
foreach ($personalInfos as $i => $value) {
  echo $i++. '番目の' .$value['name']. 'のメールアドレスは' $value['mail']. 'で、電話番号は' .$value['tel']. 'です。';
}

// $ageList = [25, 30, 18];
// 上記の$ageListを使用して、$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加してください。その際は、foreachを使用してください。
// 追加ができたらvar_dumpを使用して配列の中身を確認してください。
$ageList = [25, 30, 18];

foreach ($personalInfos as $i => &$key) {{
  $key['age'] = $ageList[$i];
}}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' .$yamada->studentId. '番の生徒は' .$yamada->studentName. 'です。';

// Q4 オブジェクト-2
// 山田はPHPの授業に参加しました。学籍番号：120
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        echo $this->studentName. 'は' .$language. 'の授業に参加しました。学籍番号：' .$this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 1ヶ月前の日付を表すDateTimeインスタンスを作成し、出力結果と同じフォーマットで出力しましょう。
$onemonthAgo = new DateTime('2021-02-02');
echo $onemonthAgo->format('Y-m-d');

// 今日の日付と1992年4月25日との日付の差を計算して、総日数を出力しましょう。
$oldDate = new DateTime('1992-4-25');
$nowDate = new DateTime();

echo 'あの日から' .$oldDate->diff($nowDate)->format('%a'). '日経過しました。';

?>