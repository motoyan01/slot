<?php

/*

考え方として…
壱[0]　1-9
弐[1]　1-9
参[2]　1-9

なおかつ、
横一列が揃ったときに当たり！と表示

*/

//初期化
$nums = [];

//ループをまわして配列を埋めていく
for ($i = 0; $i < 3; $i++) {
  //各列における数値の範囲内において、9個の数字を取り出す
  $col = range(1, 9);
  //シャッフルする
  shuffle($col);
  //先頭から3個を取り出して配列に格納する
  $nums[$i] = array_slice($col, 0, 3);
}

//$nums[0][1] = 5;
//$nums[1][1] = 5;
//$nums[2][1] = 5;

//var_dump($nums);

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>簡単スロット</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">
      <table>
        <tr>
          <th>壱</th><th>弐</th><th>参</th>
        </tr>
        <?php for ($i = 0; $i < 3; $i++) : ?>
        <tr>
          <?php for ($j = 0; $j < 3; $j++) : ?>
          <td><?php echo $nums[$j][$i]; ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>
      </table>
    </div>
    <?php if ($nums[0][1] == $nums[1][1] && $nums[1][1] == $nums[2][1]) : ?>
        <h1>おめでとうございます！</h1>
    <?php else :  ?>
        <h1>残念！リロードして再チャレンジ！</h1>
    <?php endif; ?>
  </body>
</html>
