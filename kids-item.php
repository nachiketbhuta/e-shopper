<?php
$result = mysqli_query($db,"SELECT * FROM products WHERE ID BETWEEN 40 AND 59");
while ($row = mysqli_fetch_assoc($result))
{ ?>
<div class="col-sm-4">
  <div class="product-image-wrapper">
    <div class="single-products">
      <div class="productinfo text-center">
        <img src="<?php echo $row['Path']; ?>" alt="<?php echo $row['Product_Name']; ?>" style="height: 241px;"/>
        <h2>Rs <?php echo $row['Price']; ?></h2>
        <a href="product-details.php?id=<?php echo (int)$row['ID']?>">
        <p><?php echo $row['Product_Name']; ?></p></a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
