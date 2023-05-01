<?php
  try {
    $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8mb4', 'root', '6vYQmWJBCO');
    echo "OK\n";
}   catch (PDOException $e) {
    echo "データベース接続エラー：".$e->getMessage();
}

  $name_sei = $_POST['name_sei'];
  $name_mei= $_POST['name_mei'];
  $gender = $_POST['gender'];
  $pref = $_POST['pref'];
  $etc_address = $_POST['etc_address'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $sql = "INSERT into members (name_sei, name_mei, gender, pref_name, address, password, email) values (:name_sei, :name_mei, :gender, :pref_name, :address, :password, :email)";
  $stmt = $dbh->prepare($sql);
  $params = array(':name_sei' => $name_sei, ':name_mei' => $name_mei, ':gender' => $gender, ':pref_name' => $pref, ':address' => $etc_address, ':password' => $password, ':email' => $email);
  $stmt->execute($params);
?>