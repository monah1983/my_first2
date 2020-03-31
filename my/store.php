<?php
// $_POST
$db_user = "default";
$db_pass ="secret";
$dsn = 'pgsql:host=192.168.100.169; dbname=default';
$pdo = new PDO($dsn, $db_user, $db_pass);
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST); //true || false

//отправки письма
//отправки СМС
//уведомления админа
//уведомления определенного пользователя

header("Location: /"); exit;



