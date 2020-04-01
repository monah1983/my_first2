<?php

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"   =>  $_POST['content']
];
function updateTask ($data) {
    $db_user = "default";
    $db_pass ="secret";
    $dsn = 'pgsql:host=192.168.100.198; dbname=default';
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->execute($data); // true || false

    header("Location: /"); exit;
}

updateTask ($data);