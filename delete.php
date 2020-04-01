<?php
$id = $_GET['id'];

/**
 * @param $id
 */
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->deleteTask($id);
header('Location: /');



