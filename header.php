<?php

	require 'DBConnect.php';

?>
<style type="text/css">
.search-container {
  float: right;
}
 input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
 .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
 .search-container {
    float: none;
  }
 input[type=text], .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
	<header id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php
								if (isset($_COOKIE["username"])) { ?>
                <li><a href=""><i class="fa fa-lock"></i><?php echo $_COOKIE["username"]; ?></a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="shopping-cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i> Log Out</a></li>
							<?php } else { ?>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="shopping-cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Log In</a></li>
                <li><a href="register.html"><i class="fa fa-lock"></i> Register</a></li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="men-product-list.php">Shop</a></li>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search-container">
    					<form action="search-result.php" class="search" method="get">
      						<input type="text" placeholder="Search.." name="search">
      						<button type="submit"><i class="fa fa-search"></i></button>
    					</form>
  					</div>
					</div>
				</div>
			</div>
		</div>
	</header>
