
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP PDO</title>
</head>
<style>

</style>

<body>

    <center>
        <div>
            <h3>Add User</h3>
            <form action="./Code.php" method="post">
                Name <br>
                <input type="text" name="name"> <br><br>
                Email <br>
                <input type="email" name="email"> <br><br>
                Password <br>
                <input type="text" name="password"> <br><br>
                Contact <br>
                <input type="number" name="contact"> <br><br>



                <button name="addUser">Add</button>
                <button name="showUser">Show</button>
                <button name="updateUser">Update</button>
                <button name="deleteUser">Delete</button> <br><br>

                Note: Hear perform show,update and delete using user name

            </form>
        </div>

    </center>
</body>

</html>