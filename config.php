<?php
//Database Connection
   class Model{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'student_management_system';
    private $conn;

    function __construct(){

        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        if($this->conn){
               echo 'connected';
        }   
        else{
            die(mysqli_error($this->conn));  
    }
    }
}
$obj = new Model();
?>