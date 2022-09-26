<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','prac_pos');

class DatabaseConnection
{
    public function __construct()
    {
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if($conn->connect_error)
        {
            die("<h1>Database Connection Failed</h1>");
        }
        echo "Database Connected Successfully";
        return $this->conn = $conn;
    }
}

class queries extends DatabaseConnection 
{
    
    public function select(){
        $users = mysqli_query($this->conn,"SELECT * FROM users");
        $row = mysqli_fetch_assoc();
    }
}