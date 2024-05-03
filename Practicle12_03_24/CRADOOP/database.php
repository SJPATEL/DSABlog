<!-- data base connection class  -->
<?php
class database{
    // create private var 
    private $host;
    private $user;
    private $password;
    private $dbname;

    // create protected function : that can access only inherits class  
    protected function connect(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'pdocrud';

        $conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        return $conn;
    }
}



// <!-- data base query class  -->


// query
// select $field from $table where $condition;
// $field -> columns 
// $table -> table name  
// $condition -> id = '1'
class query extends database{
    // 1] SELECT FUNCTION 
    // get data from db 
    public function getData($table,$field,$condition){
        $sql = "SELECT $field FROM `$table` "; // create query 
        // check user enter for condition 
        if($condition != ''){
            $sql.= "where $condition ";
        }

        // first access connect function form database class then query execute 
        $result  = $this->connect()->query($sql);
        // get num of row record 
        if($result->num_rows > 0){
            // print record 
            $array = array(); // Create array
            while($row = $result-> fetch_assoc()){
                $array[] = $row; // store value in array
            }
            return $array;
        }else{
            return 0;
        }
    }

    // 2] INSERT DATA
    public function insertData($table,$field, $value){
        $sql = "INSERT INTO `$table` ($field) VALUES ($value)"; // Insert query 
        // check user enter for condition 
        if($field == ''){
            echo "not blank of field ";
        }
        if($value == ''){
            echo "not blank of value";
        }

        // first access connect function form database class then query execute 
        $result  = $this->connect()->query($sql);
        if($result){
            return 1;
            header('location: ./Login.php');
        }else{
            return 0;
        }
       
    } 


     // 3] DELETE  DATA
     public function deleteData($table,$condition){
        $sql = "DELETE  FROM `$table` "; // Delete query 
        // check user enter for condition 
        if($condition != ''){
            $sql.= "where $condition ";
        }

        // first access connect function form database class then query execute 
        $result  = $this->connect()->query($sql);
        if($result){
            return 1;
        }else{
            return 0;
        }
       
    } 

    // 4] UPDATE  DATA
    public function updateData($table,$values,$condition){
        $sql = "UPDATE `$table` SET"; // Delete query 
        // check user enter for condition 
        if($values != ''){
            $sql.= " $values ";
        }
        if($condition != ''){
            $sql.= "where $condition ";
        }
        // first access connect function form database class then query execute 
        $result  = $this->connect()->query($sql);
        if($result){
            return 1;
        }else{
            return 0;
        }
       
    } 


    public function get_safe_str($str){
        if($str != ''){

            return mysqli_real_escape_string($this->connect(),$str);
        }
    }

}




?>


