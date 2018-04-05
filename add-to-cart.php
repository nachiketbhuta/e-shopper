<?php

  require 'DBConnect.php';

  if (isset($_GET["id"])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE ID = '$id'";
    $result = mysqli_query($db, $sql);
    $product = mysqli_fetch_object($result);
    var_dump($product);

    if (isset($_GET["action"])) {
      if ($_GET["action"] == "add") {

        $username = $_COOKIE["username"];
        $name = $product->Product_Name;
        $imagePath = $product->Path;
        $quantity = 1;
        $price = $product->Price;

        $sql = "INSERT INTO cart VALUES ('$username', '$id', '$name'
              , '$imagePath', '$quantity', '$price')";

        $result = mysqli_query($db, $sql); 

      }
    }
    header("Location: shopping-cart.php");
  }

?>