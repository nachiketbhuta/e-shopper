<?php 
	session_start();
	//var_dump($_SESSION['total']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Digi Pay</title>
	<style>
		input[type=submit] {
    		padding: 5px 15px; 
			background: #ccc; 
			font-size: 16px;
    		border:0 none;
    		cursor:pointer;
    		-webkit-border-radius: 5px;
    		border-radius: 5px; 
		}
		
		.p {
			font-size: 16px;
			text-decoration: bold;
		}

	</style>
</head>
<body>
<center>
<form action="https://digipaym.000webhostapp.com/LoginPage.php" method="POST">

<!-- Amount: -->
<input type="hidden" name="amount" value="<?php echo $_SESSION['total']; ?>"> <br>

<!-- Merchant Username: -->
<input type="hidden" name="merchant" value="eshopper@eshopper.com"> <br>

<!-- Merchant AccNo: -->
<input type="hidden" name="acc_no" value="6008201116034629"> <br>

<p class = "p"> Redirecting to DigiPay Payment Gateway..... </p>

<input type="submit" value="CLICK TO PAY">

</form>
</center>
</body>
</html>

