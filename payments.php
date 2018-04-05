<?php 
	session_start();
	//var_dump($_SESSION['total']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Digi Pay</title>
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

<input type="submit" value="CLICK TO PAY">

</form>
</center>
</body>
</html>

