<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn){
            echo "Connection is succesfully";
        }else {
            die(mysqli_error($conn));
        }



















?>