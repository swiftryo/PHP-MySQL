<?php 
  // パスワードを記録した場所
  echo __FILE__;
  // /Applications/MAMP/htdocs/mainte/test.php

  echo '<br>'; // パスワード暗号化
  echo(password_hash('password123', PASSWORD_BCRYPT));

?>