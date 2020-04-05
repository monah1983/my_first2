<?php
//1. Connect to DB
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->getAllTasks()

// Auth

// register()

// login()

// logout()
// currentUser()
// check()
// ...

// ImageManager
// upload($image) //
// delete($path)
// ...

?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <a href="/login">Login</a>
        <div class="col-md-12">
            <h1>All Tasks</h1>
            <a href="create.php" class="btn btn-success">Add task</a>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>

            <tbody>
            <?php foreach($tasks as $task):?>
                <tr>
                    <td><?= $task['id'];?></td>
                    <td><?= $task['title'];?></td>
                    <td>
                        <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">
                            Show
                        </a>
                        <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">
                            Edit
                        </a>
                        <a onclick="return confirm('are you sure?');" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>
            </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

