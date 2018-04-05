<?php

	require 'DBConnect.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$username = $_COOKIE["username"];

		if (isset($_GET['action'])) {
			if ($_GET['action'] == "delete") {
				$sql = "DELETE FROM cart WHERE id = '$id' AND username = '$username'";
				mysqli_query($db, $sql);

			}
		}
		header("Location: shopping-cart.php");
	}


?>
