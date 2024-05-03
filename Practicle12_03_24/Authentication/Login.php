<?php
    include './Db.php';

    if(isset($_POST['login'])){
        $obj = new Authentication(); // Class object

        $email = $obj->sef_char($_POST['email']);
        $password = $obj->sef_char($_POST['password']);

        $result = $obj->login('user','*',"email = '$email' && password = '$password'");
        if($result){
            echo "Login success ";
        }else{
            echo "Not Login success";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>

<body>
    <Center>
        <form action="" method="post">
            Email: <br><br>
            <input type="email" name="email"><br><br>

            Password: <br><br>
            <input type="password" name="password"><br><br>

            <button name="login">Login</button>
        </form>
    </Center>

</body>

</html>