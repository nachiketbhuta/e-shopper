<?php
     require_once "DBConnect.php";

    if(isset($_POST['register_email']) && isset($_POST['register_username']) && isset($_POST['register_password'])) {
        $username = $_POST['register_username'];
        $email = $_POST['register_email'];
        $password = md5($_POST['register_password']);

        $query = "INSERT INTO users (email ,username ,password) VALUES('$email', '$username', '$password')";
        $result = mysqli_query($db, $query);
        if($result){
            alert("Register Successfully!");
            header("Location: login.html");
        }
        else {
            alert("Error While Registering!");
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

