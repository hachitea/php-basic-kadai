<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // ソートする配列を宣言
    $num = [15, 4, 18, 23, 10 ];

    echo '昇順にソートします。' . '<br>';
    $num = array(15, 4, 18, 23, 10);
    sort($num);
    foreach ($num as $key => $value) {
      echo $value . '<br>';
    }

    echo '降順にソートします。' . '<br>';
    $num = array(15, 4, 18, 23, 10);
    rsort($num);
    foreach ($num as $key => $value) {
      echo $value . '<br>';
    }
    ?>
  </p>
</body>
</html>