<!-- Write a PHP script to demonstrate Statement Management Function -->


<?php
session_start();

if (isset($_POST['session'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $_SESSION['userName'] = $name;
    $_SESSION['userEmail'] = $email;
 
}
if (isset($_POST['getSession'])) {
    if((isset($_SESSION['userName'])) && (isset($_SESSION['userEmail']))){
        $name = $_SESSION['userName'];
        $email = $_SESSION['userEmail'];
        echo "User Name : $name";
        echo "User Email : $email";
    }
 
}
if (isset($_POST['desSession'])) {
    session_destroy();
 
}
if (isset($_POST['cookies'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    setcookie("userName","$name",time() + 60 * 60);
    setcookie("userEmail","$email",time() + 60 * 60);

}
if (isset($_POST['getCookies'])) {
    
    if((isset($_COOKIE['userName'])) && (isset($_COOKIE['userEmail']))){
        $name = $_COOKIE['userName'];
        $email = $_COOKIE['userEmail'];
        echo "User Name : $name";
        echo "User Email : $email";
    }
}
if (isset($_POST['deleteCookies'])) {
    setcookie("userName","",time() - 3600);
    setcookie("userEmail","",time() - 3600);
 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Statement COOCKIES and SESSION</title>
</head>

<body>
    <Center>

        <h2>Statement COOCKIES and SESSION</h2>
        <form action="" method="post">
            <!-- Text boxes -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" ><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" ><br><br>
    
    
    
            <!-- Submit button -->
            <input type="submit" value="Set Session" name="session">
            <input type="submit" value="Get Session value" name="getSession">
            <input type="submit" value="Destroy Session value" name="desSession">
            <br><br>
            <input type="submit" value="Set Cookies" name="cookies">
            <input type="submit" value="Get Cookies" name="getCookies">
            <input type="submit" value="Delete Cookies" name="deleteCookies">
        </form>
    </Center>
</body>

</html>