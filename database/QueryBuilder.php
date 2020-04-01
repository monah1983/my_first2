<?php
class QueryBuilder {
    //Список задач
    function getAllTasks () {
        $db_user = "default";
        $db_pass ="secret";
        $dsn = 'pgsql:host=192.168.100.198; dbname=default';
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $sql = "SELECT * FROM tasks";
        $statement = $pdo->prepare($sql);
        $result = $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }
    //Сохранение новой задачи
    function addTask ($data) {
        $db_user = "default";
        $db_pass ="secret";
        $dsn = 'pgsql:host=192.168.100.198; dbname=default';
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
        $statement = $pdo->prepare($sql);
        $statement->execute($data); //true || false
    }
    // Вывод одной задачи
    function getTask($id) {
        $db_user = "default";
        $db_pass ="secret";
        $dsn = 'pgsql:host=192.168.100.198; dbname=default';
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    //Изменение/обновление существующей задачи
    function updateTask ($data) {
        $db_user = "default";
        $db_pass ="secret";
        $dsn = 'pgsql:host=192.168.100.198; dbname=default';
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
        $statement = $pdo->prepare($sql);
        $statement->execute($data); // true || false
    }
    //Удаление задачи
    function deleteTask($id) {
        $db_user = "default";
        $db_pass ="secret";
        $dsn = 'pgsql:host=192.168.100.198; dbname=default';
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $sql = 'DELETE FROM tasks WHERE id=:id';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}