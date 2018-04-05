<?php

	require 'DBConnect.php';

	$email = $_POST['email'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$pin = $_POST['pin_code'];
	$mobile = $_POST['mobile'];

	$sql = "SELECT email FROM users WHERE email = '$email'";
  	$result = mysqli_query($db, $sql);
  
  	$count = mysqli_num_rows($result);
  
  	if($count == 0){
		
		$sql = "INSERT INTO shipping_details VALUES('$email','$name','$address', '$pin', '$mobile')";

	  	mysqli_query($db, $sql);
	  	header("Location: payments.php");
  	}
  	else {

		echo"Not successful";
  	}

?>