<?php
    include './Db.php';

    if(isset($_POST['registration'])){
        $obj = new Authentication(); // Class object

        $name = $obj->sef_char($_POST['name']);
        $email = $obj->sef_char($_POST['email']);
        $password = $obj->sef_char($_POST['password']);
        $contact = $obj->sef_char($_POST['contact']);

        $result = $obj->Registration('user','name,email,password,contact', "'$name','$email','$password','$contact'");
        if($result){
            echo "Registration success ";
            header('location: ./login.php');
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
</head>
<body>
    <Center>
        <form action="" method="post">
            Name: <br><br>
            <input type="text" name="name" required><br><br>

            Email: <br><br>
            <input type="email" name="email" required><br><br>

            Password: <br><br>
            <input type="password" name="password" required><br><br>

            Contact: <br><br>
            <input type="contact" name="contact" required><br><br>

            <button name="registration">Registration</button>
        </form>
    </Center>
    
</body>
</html>