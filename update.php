<?php

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"   =>  $_POST['content']
];

require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->updateTask($data);
header("Location: /"); exit;