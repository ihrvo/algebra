<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Baza {
    private string $host = "localhost";
    private string $user = "algebra";
    private string $password = "algebra";
    private string $database = "videoteka";
    private $connection;

    public function __construct () {
        $this -> connection = $this -> connectDB();
    }

    public function connectDB() {
        $connection = mysqli_connect($this -> host, $this -> user, $this -> password, $this -> database);
        
        if($connection === false){
            die("Connection failed: ". mysqli_connect_error());
        }

        return $connection;
    }

    public function runSql ($sql) {
        $result = mysqli_query($this -> connection, $sql);
        $return = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($this -> connection);
        return $return;
    }
}