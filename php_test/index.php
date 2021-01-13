<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // // 変数　動的型付
    // // $test = 123;
    // $test = 456;
    // var_dump($test);
    // // echo $test;
    // //先頭は英文字は＿ 
    // // 

    // $array_member = [
    //   'nema' => 'ホンダ',
    //   'height' => 170,
    //   'hobby' => 'サッカー'
    // ];
    // // -ではなく=注意

    // echo $array_member['hobby'];
    // // var_dump($array_member);

    // $array_member_2 = [
    //   'ホンダ' => [
    //     'height' => 170,
    //     'hobby' => 'サッカー'
    //   ],
    //   '香川' => [
    //     'height' => 170,
    //     'hobby' => 'サッカー'
    //   ]
    //   ];

    //   echo $array_member_2['香川']['height'];
    //   var_dump($array_member_2);
      // $test_1 = 2;
      // $test_2 = 3;
      // $test_3 = $test_1 + $test_2;

      // $test_3 = $test_3 + $test_3;


      // echo $test_3;

    // if (条件) {
    //   条件が真なら実行
    // }

    $height = 90;

    if ($height === 91) {
      echo '身長は' . $height . 'cmです';
    } else {
      echo '身長は' . $height;
    }

    // == 一致
    // ===　型も一致　使うならこっち




  ?>
</body>
</html>
