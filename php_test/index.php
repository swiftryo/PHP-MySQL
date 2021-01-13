<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // 変数　動的型付
    // $test = 123;
    $test = 456;
    var_dump($test);
    // echo $test;
    //先頭は英文字は＿ 
    // 

    $array_member = [
      'nema' => 'ホンダ',
      'height' => 170,
      'hobby' => 'サッカー'
    ];
    // -ではなく=注意

    echo $array_member['hobby'];
    // var_dump($array_member);
  ?>
</body>
</html>
