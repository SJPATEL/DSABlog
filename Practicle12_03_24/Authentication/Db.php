<?php
// Database connection class 
class database{
    private $host;
    private $user;
    private $password;
    private $database;

    protected function connect(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'pdocrud';

        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }
}    

// Authentication class
class Authentication extends database{

    public function Registration($table,$field, $values){
        $sql = "INSERT INTO `$table` ($field) VALUES ($values)";

        // Check user enter value or not 
        if($field == ''){
            echo "not blank of field ";
            return 0;
        }
        if($values == ''){
            echo "not blank of field ";
            return 0;
        }

        $result = $this->connect()->query($sql);
        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function login($table,$field,$condition){
        $sql = "SELECT $field  FROM `$table`";

        if($condition != ''){
            $sql.= " WHERE $condition ";
        }

        $result = $this->connect()->query($sql);
        if($result->num_rows == 1){
            return 1;
        }else{
            return 0;
        }

    }

    public function sef_char($str){
        if($str != ''){

            return mysqli_real_escape_string($this->connect(),$str);
        }
    }

} 



?>