<?php

class Database{

    

    private $host = "173.254.28.110";

    private $db_name = "goinduc1_REST-api";

    private $username = "goinduc1_test";

    private $password = "test";

    public $conn;

    

    public function getConnection(){

        $this->conn = null;

        try{

            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

            $this->conn->exec("set names utf8");

        }catch(PDOException $exception){

            echo "Connection error: " . $exception->getMessage();

        }

        return $this->conn;

    }

}

?>