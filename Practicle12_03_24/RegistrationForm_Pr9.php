<!-- Pro-9 : Create student registration form using text box, check box, radio button, select, submit button. And display user inserted values in the new PHP page.  -->


<?php

if (isset($_POST['Regisration'])) {

    // Retrieving form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subscribe = isset($_POST['subscribe']) ? htmlspecialchars($_POST['subscribe']) : 'No';
    $gender = htmlspecialchars($_POST['gender']);
    $program = htmlspecialchars($_POST['program']);
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Subscribe to newsletter: $subscribe<br>";
    echo "Gender: $gender<br>";
    echo "Program: $program<br>";
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

        <!-- Checkbox -->
        <label for="subscribe">Subscribe to newsletter</label>
        <input type="checkbox" id="subscribe" name="subscribe" value="Yes"><br><br>

        <!-- Radio buttons -->
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>

        <!-- Select dropdown -->
        <label for="program">Program:</label>
        <select id="program" name="program" required>
            <option value="">Select a program</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Postgraduate">Postgraduate</option>
        </select><br><br>

        <!-- Submit button -->
        <input type="submit" value="Register" name="Regisration">
    </form>
</body>

</html>