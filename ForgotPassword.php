<?php

    require_once "DBConnect.php";

    if (isset($_POST['new_password']) && isset($_POST['confirm_password']) && isset($_POST['username'])) {

        $username = $_POST['username'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if(count($_POST) > 0) {

            $result = mysqli_query($db, "SELECT * from users WHERE username='$username'");
            $row = mysqli_fetch_array($result);

            if($new_password == $confirm_password) {
                $new_password = md5($new_password);
                mysqli_query($db, "UPDATE users set password='$new_password' WHERE username='$username'");
                alert("Password Changed");
                header('Location: login.html');
            }
            else
                alert("Please check your password.");
        }
    }
    else {
        alert("Error while changing password!");
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
?>
