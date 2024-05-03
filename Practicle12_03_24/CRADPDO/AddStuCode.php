<?php
// connection 
session_start();
include("./db.php");
// Add Student Data 
if (isset($_POST['addStudent'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];

    // Insert data 
    $query = "INSERT INTO `students` (name,email,contact,course) VALUES (:name,:email,:contact,:course)"; // query
    $query_run = $conn->prepare($query);
    // Make data array
    $data = [
        ':name' => $name,
        ':email' => $email,
        ':contact' => $contact,
        ':course' => $course,
    ];

    // insert data in db using query 
    $query_execute = $query_run->execute($data);
    if ($query_execute) {
        echo "<script>alert('Student Inserted Successfully');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    } else {
        echo "<script>alert('Student Not Inserted Successfully');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    }
}

// Update Student Data 
if (isset($_GET['upid'])) {
    $id = $_GET['upid'];
    if (isset($_POST['UaddStudent'])) {
        $Uname = $_POST['Uname'];
        $Uemail = $_POST['Uemail'];
        $Ucontact = $_POST['Ucontact'];
        $Ucourse = $_POST['Ucourse'];

        // Update data 
        $query = "UPDATE  `students`  SET name=:name,email=:email, contact=:contact,course=:course WHERE id=:id "; // query
        $statement = $conn->prepare($query);
        // Make data array
        $data = [
            ':name' => $Uname,
            ':email' => $Uemail,
            ':contact' => $Ucontact,
            ':course' => $Ucourse,
            ':id' => $id,
        ];

        // Update insert data in db using query 
        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo "<script>alert('Student Update Successfully');</script>";
            echo "<script>window.location.replace('index.php');</script>";
        } else {
            echo "<script>alert('Student Not Update Successfully');</script>";
            echo "<script>window.location.replace('index.php');</script>";
        }
    }
}
// Delete Student Data 
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];


    // Delete data 
    $query = "DELETE FROM  `students` WHERE id=:id "; // query
    $statement = $conn->prepare($query);

    // Update insert data in db using query 
    $query_execute = $statement->execute([':id' => $id]);

    if ($query_execute) {
        echo "<script>alert('Student Delete Successfully');</script>";
        echo "<script>window.location.replace('ShowStudent.php');</script>";
    } else {
        echo "<script>alert('Student Not Delete Successfully');</script>";
        echo "<script>window.location.replace('ShowStudent.php');</script>";
    }
}
