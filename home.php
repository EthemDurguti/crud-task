<?php
    include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud Task</title>
</head>

<body>
    <div class="container">
       <div class="h1 display-1 text-center mt-3 mb-2 fw-bold fst-italic text-primary">Add a new User</div>
    <div class="text-center mb-5">
        <img src="photo1.svg" class="img-fluid" alt="Photo">
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>

                <?php

  $sql = "SELECT * from users ";
  $result = mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        echo "<tr>
        <th> $id </th>
        <td> $name </td>
        <td> $email </td>
        <td> $password </td>
        <td>
        <a href='update.php?updateid=$id'><button class='btn btn-primary text-light'>Update</button></a>
        <a href='delete.php?deleteid=$id'><button class='btn btn-danger text-light'>Delete</button></a>
        </td>
        </tr>";
    }
  }

  ?>



            </tbody>
        </table>
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
    </div>

</body>

</html>