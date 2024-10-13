<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "./node_modules/bootstrap/dist/css/bootstrap.css" rel = "stylesheet">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <form method = "POST">
            <h1>Edit Account</h1>
            <div class="mb-3">
                <label for="fname" class="form-label">Name</label>
                <input type="text" class="form-control" id="fname" placeholder = "Name" name = "name" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Email</label>
                <input type="email" class="form-control" id="lname" placeholder = "Email" name = "email" required>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Password</label>
                <input type="text" class="form-control" id="Email" placeholder = "Password" name = "password" required>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
            <?php
                require_once 'user_manage.php';
                $address = $_GET["address"];
                echo $address;
                if(isset($_POST["submit"])){
                    $new = new User('localhost','root','','user_management');
                    $new->updateUser($address);
                    echo"updated successfully";
                }
            ?>
        </form>
    </div>
    <script src = "./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>