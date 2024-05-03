<!-- Write PHP script to demonstrate the use of regular expression -->

<!-- Pro-9 : Create student registration form using text box, check box, radio button, select, submit button. And display user inserted values in the new PHP page.  -->


<?php

if (isset($_POST['validate'])) {

    // Retrieving form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);

    $r_name = "/^[A-Z]+[a-z]{3,15}$/";
    $r_email = "/^[a-zA-Z0-9]{2,50}@[a-zA-Z0-9]{2,8}.[a-zA-Z]{1,8}$/";
    $r_contact = "/^[0-9]{10}$/";

    if(preg_match($r_name,$name)){
        if(preg_match($r_email,$email)){
            if(preg_match($r_contact,$contact)){
                echo "Registration successfully";
            }else{
                echo "Not valid contact";
            }
        }else{
            echo "Not valid email";
        }
    }else{
        echo "Not valid name";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>
</head>

<body>
    <h2>Student Registration Form</h2>
    <form action="" method="post">
        <!-- Text boxes -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="email">Contact:</label>
        <input type="contact" id="contact" name="contact" required><br><br>

     

        <!-- Submit button -->
        <input type="submit" value="Register" name="validate">
    </form>
</body>

</html>