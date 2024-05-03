<!-- Pro-11 : Write PHP script to demonstrate form validation using javascript -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Age Verification Form</title>
    <script>
        function validateForm() {
            var age = document.forms["ageVerificationForm"]["age"].value;

            // Convert the age input to an integer
            age = parseInt(age);

            // Check if age is a number
            if (isNaN(age)) {
                alert("Please enter a valid age.");
                return false;
            }
            // Check if age is less than 18
            if (age < 18) {
                alert("You must be at least 18 years old.");
                return false;
            }
            // If everything is fine, allow form submission
            return true;
        }
    </script>
</head>

<body>
    <h2>Age Verification Form</h2>
    <form name="ageVerificationForm" onsubmit="return validateForm()" method="post">
        Age: <input type="text" name="age"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>