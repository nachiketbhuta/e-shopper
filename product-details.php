<?php include 'DBConnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details</title>
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

	<section>
		<div class="container">
			<div class="row">

        <?php include 'category.php'; ?>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
                <?php
                    $id = (int)$_GET['id'];
                    //echo '<h2>'.$id.'</h2>';
                    $result = mysqli_query($db,"SELECT * FROM products WHERE ID = '$id'");
                    //var_dump($result);
                    $row = mysqli_fetch_assoc($result);
                    //var_dump($row);
                 ?>
					<div class="col-sm-5">
						<div class="view-product">
							 <img src="<?php echo $row['Path']; ?>" alt="<?php echo $row['Product_Name']; ?>" />
						</div>
					</div>
					<div class="col-sm-7">
						<div class="product-information"><!--/product-information-->
							<h2><?php echo $row['Product_Name']; ?></h2>
							<span>
								<span>Rs <?php echo $row['Price']; ?></span>
                                <br><br><br><br>
							  <a href="add-to-cart.php?id=<?php echo $row['ID']; ?>"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
                            </span>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
				</div>
			</div>
		</div>
	</section>

  <?php include 'footer.php'; ?>

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
