<?php

function addTask ($data) {
    $db_user = "default";
    $db_pass ="secret";
    $dsn = 'pgsql:host=192.168.100.198; dbname=default';
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
    $statement = $pdo->prepare($sql);
    $statement->execute($data); //true || false
}

addTask($_POST);


//отправки письма
//отправки СМС
//уведомления админа
//уведомления определенного пользователя

header("Location: /"); exit;



