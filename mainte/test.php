<?php 
  // パスワードを記録した場所
  // echo __FILE__;
  // // /Applications/MAMP/htdocs/mainte/test.php

  // echo '<br>'; // パスワード暗号化
  // echo(password_hash('password123', PASSWORD_BCRYPT));

  // $contactFile = '.contact.dat';
  // // ファイルまるごと読み込み
  // $fileContents = file_get_contents($contactFile);
  // // ファイル書き込み（上書き）
  // // file_put_contents($contactFile, 'テストlolololo');
  // // ファイル書き込み(追記)
  // file_put_contents($contactFile, 'テストでえす', FILE_APPEND);

  $contactFile = '.contact.dat';

  $contents = fopen($contactFile, 'a+');

  $addText = '1行追記' . "\n";

  fwrite($contents, $addText);

  fclose($contents);



?>