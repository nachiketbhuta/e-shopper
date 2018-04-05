<?php

    require_once "DBConnect.php";

    if(isset($_POST['login_username']) && isset($_POST['login_password'])) {

    // Define $username and $password
    $username = $_POST['login_username'];
    $password = md5($_POST['login_password']);

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);
    //$username = mysql_real_escape_string($username);
    //$password = mysql_real_escape_string($password);

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($db, $sql);

    // Mysql_num_row is counting table row
    $count = mysqli_num_rows($result);

    // If result matched $username and $password, table row must be 1 row
    if ($count == 1) {
        alert("Login Successfully!");
        session_start();
        $cookiename = "username";
        $cookievalue = $username;
        setcookie($cookiename, $cookievalue, time() + 86400 * 30);
        header("Location: index.php");
    } else {
        alert("Error While Logging you in!");
        //header("Location: http://localhost:8085/fashion/login/login.html");
    }
}
else {
    alert ("Please provide the credentials of you!");
    header("Location: http://localhost:8082/fashion/login/login.html");
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
