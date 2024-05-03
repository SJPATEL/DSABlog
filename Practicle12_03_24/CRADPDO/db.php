<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "pdocrud";

    try {
        // conn db 
        $conn = new PDO("mysql:host=$serverName;dbname=$database",$userName,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo "Connection Failed".$e->getMessage();
    }

?>