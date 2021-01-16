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

    // $height = 90;

    // if ($height === 91) {
    //   echo '身長は' . $height . 'cmです';
    // } else {
    //   echo '身長は' . $height;
    // }

    // == 一致
    // ===　型も一致　使うならこっち

    // $test = '';

    // if(!empty($test)) {
    //   echo 'からです';
    // }

    // isset empty is_null
    // AND OR

    // $members = [
    //   'name' => '本田',
    //   'height' => 170,
    //   'hobby' => 'サッカー'
    // ];

    // // バリューのみ

    // // foreach($members as $member) {
    // //   echo $member;
    // // }

    // // キーとバリューそれぞれ
    // foreach($members as $key => $value){
    //   echo $key . 'は' . $value . 'です';
    // }

    // for($i = 0; $i < 10; $i++ ){
    //   if($i === 5) {
    //     continue;
    //   }
    //   echo $i;
    // }
    // $j = 0;
    // while($j < 5){
    //   echo $j;
    //   $j++;

    // }
    
    // function test(引数){
    //   // 処理
    //   return 戻り値;
    // }
    // $text = 'あいう';
    // echo strlen($text);
    // echo mb_strlen($text);
    // $str_2 ='指定文字列で、分割します';

    // var_dump(explode('で', $str_2));


    // $array = ['りんご','みかん'];

    // array_push($array,'ぶどう','なし');

    
    // var_dump($array);

    // camelCase

    // $postalCode = '123-4567';
    // function checkPostalCode($str) {
    //   $replaced = str_replace('-', '', $str);
    //   $lenght = strlen($replaced);

    //   if($lenght === 7){
    //     return true;  
    //   }
    //   return false;
    // }

    // var_dump(checkPostalCode($postalCode));

    // // snakeCase  
    // check_postal_code()

    // $globalVariable = 'グローバル変数です';

    // function checkScope() {
    //   $localVariable = 'ローカル変数です';
    //   global $globalVariable;
    //   echo $globalVariable;
    // }

    // echo $globalVariable;
    // echo $localVariable;

    // checkScope();

    // require エラー　エラーで止まるからこっちを使うようにする
    // include 警告 処理が続けれるなら


    // require 'common.php';

    // echo $commonVariable;

    // commonTest();

    // $test = 123;
    // echo $test;
    // phpinfo();





  ?>
</body>
</html>
