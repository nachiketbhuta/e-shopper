<?php
    
  session_start();
  require 'DBConnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shopping Cart</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	  <link href="css/main.css" rel="stylesheet">
	  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

  <?php include 'header.php'; ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
      
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Item</td>
              <td class="description"></td>
              <td class="price">Price</td>
              <td class="quantity">Quantity</td>
              <td class="total">Total</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <?php
                $total = 0;
                
                if ($_COOKIE["username"]) {
                  $sql = "SELECT * FROM cart WHERE username IN('".$_COOKIE["username"]."');";
                $result = mysqli_query($db,$sql);
                if (mysqli_error($db)) {
                  echo "Error: " . mysqli_error($db);
                }
                if($result->num_rows > 0){
                  while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td class="cart_product">
                <img src="<?php echo $row['imagePath']; ?>" alt="<?php echo $row['name']; ?>" style="height: 130px;">
              </td>
              <td class="cart_description">
                <h4><a href=""><?php echo $row['name']; ?></a></h4>
                <p><?php echo $row['id']; ?></p>
              </td>
              <td class="cart_price">
                <p>Rs <?php echo $row['price']; ?></p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                  <a class="cart_quantity_up" href="add-cart-button.php?id=<?php echo $row['id']; ?>"> + </a>
                  <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $row['quantity'];?>" autocomplete="off" size="2" disabled>
                  <a class="cart_quantity_down" href="subtract-cart-button.php?id=<?php echo $row['id']; ?>"> - </a>
                </div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">Rs <?php echo $row['price'] * $row['quantity']; ?> </p>
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="remove-from-cart.php?action=delete&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
              </td>
            </tr>

            <?php 
            $total = $total + ($row['price'] * $row['quantity']);
          }}?>
          </tbody>
        </table>
      </div>

		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span>Rs <?php echo number_format($total, 2);
              $_SESSION['total'] = $total;
            }?> </span></li>
						</ul>
							<a class="btn btn-default check_out" href="checkout.php" style = "float: right;">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

  <?php include 'footer.php'; ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
