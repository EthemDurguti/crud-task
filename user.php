<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password) 
    VALUES('$name','$email','$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
       header('location:home.php');
    } else {
        die(mysqli_error($conn));
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud Task</title>
</head>

<body>
    <div class="container my-5">
    <div class="h1 display-1 text-center mt-3 mb-2 fw-bold fst-italic text-primary">Add a new User</div>
    <div class="text-center mb-5">
        <img src="photo1.svg" class="img-fluid" alt="Photo">
    </div>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>