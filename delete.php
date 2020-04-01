<?php
$id = $_GET['id'];

$db_user = "default";
$db_pass ="secret";
$dsn = 'pgsql:host=192.168.100.169; dbname=default';
$pdo = new PDO($dsn, $db_user, $db_pass);

$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();


header('Location: /');