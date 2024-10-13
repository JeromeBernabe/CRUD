<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "./node_modules/bootstrap/dist/css/bootstrap.css" rel = "stylesheet">
    <title>Delete</title>
</head>
<body>
    <div class = "container">
        <h1>Deleted Successfully</h1>
        <?php
            require_once 'user_manage.php';
            $new = new User('localhost','root','','user_management');
            $address = $_GET["address"];
            $new->deleteUser($address);
        ?>
    </div>
    <script src = "./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>