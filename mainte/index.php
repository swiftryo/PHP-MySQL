<?php

  require 'db_connection.php';
  // ユーザー入力なし query
  // $sql = 'select * from contacts where id = 1';
  // $stmt = $pdo->query($sql);
  // $result = $stmt->fetchall();
  
  // var_dump($result);
  
  
  // ユーザー入力あり prepare bind execute
  $sql = 'select * from contacts where id = :id';
  // プレースホルダ
  $stmt = $pdo->prepare($sql);
  // プリペアードステートメント
  $stmt->bindValue('id', 2, PDO::PARAM_INT);
  // 紐付け
  $stmt->execute(); 
  // 実行
  $result = $stmt->fetchall();
  
  
  var_dump($result);
  // トランザクション まとまって処理 beginTransaction, commit, rollback
  
  





?>

