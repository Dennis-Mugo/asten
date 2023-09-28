<?php

class DbConnection
{
    public $pdo;
    public function __construct()
    {
        $host = 'localhost';
        $db = 'asten';
        $port = '3309';
        $userName = 'root';
        $pass = '';

        $dsn = "mysql:host=$host:$port;dbname=$db";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $this->pdo = new PDO($dsn, $userName, $pass, $opt);
    }

    public function insertUser($username, $email, $hashed_password)
    {
        $sql = "insert into users (username, email, pass) values (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username, $email, $hashed_password]);
    }

    public function fetchUsers() {
        $sql = "select username, email from users";
        $results = $this -> pdo -> query($sql);
        return $results;
    }

}

?>