<?php
class Auth {
    public function process_register($db) {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format");
            }else{
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $db -> insertUser($username, $email, $hashed_password);
                header("Location: index.php");
                exit();

            }
        }
        
    }
}