<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href = "./node_modules/bootstrap/dist/css/bootstrap.css" rel = "stylesheet">
</head>
<body>
    <div class = "container">
        <br><br>
        <h1>Database</h1>
        <a href = "adduser.php"><button class="btn btn-primary">Add</button></a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Created at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'user_manage.php';
                    $user = new User('localhost','root','','user_management');
                    $user->getUsers();
                ?>                                       
            </tbody>
        </table>
    </div>
    <script src = "./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
