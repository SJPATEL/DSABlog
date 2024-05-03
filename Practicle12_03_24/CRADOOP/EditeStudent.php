<?php
include 'database.php';

$obj = new query();

// UPDATE DATA 
if(isset($_POST['UaddStudent'])){

    $id =$obj->get_safe_str($_GET['edit']);    

    $Uname = $obj->get_safe_str($_POST['Uname']);
    $Uemail = $obj->get_safe_str($_POST['Uemail']);
    $Ucontact = $obj->get_safe_str($_POST['Ucontact']);
    $Ucourse = $obj->get_safe_str($_POST['Ucourse']);

    $result = $obj->updateData('students',"name='$Uname',email='$Uemail',contact='$Ucontact',course='$Ucourse'","id=$id");
    if($result){
        echo "Successfully Update";
    }
    
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD USING PDO </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid col-md-8 m-auto">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./ShowStudent.php">Show Student</a>
                    </li>

                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="col-md-6 m-auto my-2">
        <h3>Edit Student</h3>
        <!-- fetch Data  -->
        <?php
        if (isset($_GET['edit'])) {
            $id =$obj->get_safe_str($_GET['edit']);          
            // GET USER DATA 
            $result = $obj->getData('students','*',"id=$id");
            $name = $result['0']['name'];
            $email = $result['0']['email'];
            $contact = $result['0']['contact'];
            $course = $result['0']['course'];
        }
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?=  $name ?>" name="Uname" placeholder="Enter your name">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="Uemail" value="<?php echo  $email ?>" placeholder="Enter your email">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Ucontact" value="<?php echo  $contact ?>" placeholder="Enter your contact">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Course</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Ucourse" value="<?php echo  $course ?>" placeholder="Enter your course">
            </div>

            <button type="submit" class="btn btn-danger py-2 col-md-2" name="UaddStudent">Update Add</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>