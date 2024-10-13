<?php
class User{
    public $conn; 
      
    public function __construct($servername, $username, $password, $database){
        $this->conn = new mysqli($servername,$username,$password,$database);
    }
    public function createUser(){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ( '$name', '$email', '$password');";
        $this->conn->query($query);
    }

    public function getUsers(){
        $result = $this->conn->query("SELECT * FROM `users`");
        $row = $result->fetch_all();
        for($i = 0; $i < sizeof($row); $i++){
            echo
            '<tr>
                <td>' . $row[$i][0] . '</td>
                <td>' . $row[$i][1] . '</td>
                <td>' . $row[$i][2] . '</td>
                <td>' . $row[$i][3] . '</td>
                <td>' . $row[$i][4] . '</td>
                <td>
                    <a href = "edit.php?address=' . $row[$i][0] . '">
                        <button class="btn btn-primary" name = "edit'. $row[$i][0] .'">
                            Edit
                        </button>
                    </a>
                </td>
                <td>
                    <a href = "delete.php?address=' . $row[$i][0] . '">
                        <button class="btn btn-primary" name = "delete'. $row[$i][0] .'">
                                Delete
                        </button>
                    </a>
                </td>
            </tr>';
        }  
    }
    public function updateUser($uniqueId){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `users`.`id` = $uniqueId;";
        $this->conn->query($query);
    }
  
    public function deleteUser($uniqueId){
        $query = "DELETE FROM `users` WHERE `users`.`id`=$uniqueId;";
        $this->conn->query($query);
    }
}
?>

