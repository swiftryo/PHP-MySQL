<?php 

// DB接続 PDO
  require 'db_connection.php';
// 入力 DB保存 prepare, bind, execute(配列(全て文字列))

$params = [
  'id' => null,
  'your_name' => 'なまえ',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'age' => '2',
  'contact' => 'いいい',
  'created_at' => 'NOW()'
];

$sql = 'insert into contacts select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 2, PDO::PARAM_INT);
$stmt->execute(); 


?>