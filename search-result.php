<?php include 'DBConnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Search Results</title>
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
          <?php include 'category.php';
          if (isset($_GET['search'])) {?>

          <div class="col-sm-9 padding-right">
            <h2>Search results for "<?php echo $_GET['search']; ?>"</h2><br/>
              <div class="features_items"><!--features_items-->
              <?php
              //var_dump($_GET['search']);
              $name = mysqli_real_escape_string ($db,$_GET['search']);
              //var_dump($name);
              //var_dump(master_products);
              $sql = "SELECT * FROM products WHERE Product_Name LIKE '%".$name."%'";
              $result = mysqli_query($db,$sql);
              //var_dump($result);
              if (!$result) {
                echo 'MySQL Error: ' . mysqli_error($db);
                //exit;
              }
              while ($row = mysqli_fetch_assoc($result))
              { ?>
              <div class="col-sm-4">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="<?php echo $row['Path']; ?>" alt="<?php echo $row['Product_Name']; ?>" style="height: 241px;"/>
                      <h2>Rs <?php echo $row['Price']; ?></h2>
                      <a href="product-details.php?id=<?php echo (int)$row['ID'];?>"><p><?php echo $row['Product_Name']; ?></p></a>
                      <a href="add-to-cart.php?id=<?php echo (int)$row['ID']; ?>&action=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php }} ?>
  					</div>
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
