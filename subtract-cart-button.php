<?php

  require 'DBConnect.php';
  session_start();
  
  if(isset($_GET['id'])) {
    $quantity = 0;
    $id = $_GET["id"];

    $sql = "SELECT * FROM cart WHERE username IN('".$_COOKIE["username"]."') AND id='$id'";
    $result = mysqli_query($db, $sql);

    if($result->num_rows > 0){
      while ($row = mysqli_fetch_assoc($result)){
        $quantity = $row["quantity"];
      }
    }

    $quantity--;

    if($quantity > 0){
      $sql = "UPDATE cart SET quantity='$quantity' WHERE id='$id'";
      $result = mysqli_query($db, $sql);
      header("Location: shopping-cart.php");
    }
  }
?>
