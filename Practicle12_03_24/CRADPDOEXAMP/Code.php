<?php
// connection 

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "crud";

try {
    // conn db 
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if (isset($_POST['addUser'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];

        // Insert data 
        $query = "INSERT INTO `user` (name,email,password,contact) VALUES (:name,:email,:password,:contact)"; // query
        $query_run = $conn->prepare($query);
        // Make data array
        $data = [
            ':name' => $name,
            ':email' => $email,
            ':password' => $password,
            ':contact' => $contact,
        ];

        // insert data in db using query 
        $query_execute = $query_run->execute($data);
        if ($query_execute) {
            echo "User Inserted Successfully";
        }
    }
    if (isset($_POST['showUser'])) {

        $name = $_POST['name'];

        $query = "SELECT * FROM `user`  WHERE name=:name";
        $query_run = $conn->prepare($query);

        $data = [
            ':name' => $name,
        ];
        $query_execute = $query_run->execute($data);

        $result  = $query_run->fetch(PDO::FETCH_OBJ);

        if ($result) {
            echo $result->name . "<br>";
            echo $result->email . "<br>";
            echo $result->password . "<br>";
            echo $result->contact . "<br>";
        } else {
            echo "Not Exist User";
        }
    }

    if (isset($_POST['updateUser'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];


        // Update data 
        $query = "UPDATE  `user`  SET email=:email,password=:password, contact=:contact WHERE name=:name "; // query
        $statement = $conn->prepare($query);
        // Make data array
        $data = [
            ':email' => $email,
            ':password' => $password,
            ':contact' => $contact,
            ':name' => $name,
        ];

        // Update insert data in db using query 
        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo "Update Successfully";
        }
    }
    if (isset($_POST['deleteUser'])) {
        $name = $_POST['name'];


        // Delete data 
        $query = "DELETE FROM  `user` WHERE name=:name "; // query
        $statement = $conn->prepare($query);

        // Update insert data in db using query 
        $query_execute = $statement->execute([':name' => $name]);

        if ($query_execute) {
            echo "Delete Successfully";
        }
    }
} catch (PDOException $e) {
    echo "Connection Failed" . $e->getMessage();
}
