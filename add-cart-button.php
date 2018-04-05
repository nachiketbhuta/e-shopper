<?php

  require_once 'DBConnect.php';
  session_start();

  if (isset($_GET['id'])) {
    $quantity = 0;
    $id = $_GET['id'];
      
    $sql ="SELECT * FROM cart WHERE username IN('".$_COOKIE["username"]."') 
            AND id='$id'";
    $result = mysqli_query($db, $sql);
    var_dump($result);

    if($result->num_rows > 0){
      while ($row = mysqli_fetch_assoc($result)){
        $quantity = $row["quantity"];
        //echo 'Quantity: ' . $quantity;
        $max = $row["quantity"];
      }
      //echo 'Hello';
    }

    $sql = "SELECT Quantity FROM products WHERE ID = '$id'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_object($result);
    $maxQuantity = $row->Quantity;

    $quantity++;

    //echo "Max Quantity: " . $maxQuantity;

    if ($quantity <= $maxQuantity) {
      $sql = "UPDATE cart SET quantity='$quantity' WHERE id='$id'";
      $rs = mysqli_query($db,$sql);
      header("Location: shopping-cart.php");
    } else {
      alert ('Maximum amount of purchase reached!');
      header ("Location: shopping-cart.php");
    }
  }

  function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
  }
?>
