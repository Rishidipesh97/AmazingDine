<?php

session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Simple Navigation Bar</title>
  
       <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  
      <link rel="stylesheet" href="navbarcss/style.css">
      <link rel="stylesheet" href="productcss/style.css">

  
</head>

<body>

  <ul class="nav">
      <li class="navItem"><a href="index.php">Home</a></li>
      <li class="navItem"><a href="hotdeals.php">Hot Deals</a></li>
      <li class="navItem"><a href="#">Cuisines</a></li>
      <li class="navItem"><a href="cart.php">Cart</a></li>
      <li class="navItem"><a href="contact.php">Contact Us</a></li>
      <li class="navItem"><a href="login_form.php">SignUP/LogIn</a></li>
    </ul>

  <div class='container'>
  <div class='row'>

<?php
  
 if(isset($_POST["search"]))
 {
     $keyword = $_POST["search"];
 }
 else
 {
   $keyword= $_SESSION["find"];
 }
 


  $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
  $run_query = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($run_query)){
      $pro_id    = $row['product_id'];
      $pro_cat   = $row['product_cat'];
      $pro_brand = $row['product_brand'];
      $pro_title = $row['product_title'];
      $pro_price = $row['product_price'];
      $pro_image = $row['product_image'];

$mail_query2 = "SELECT * from products where product_id='$pro_id' ";
      $run_query2 = mysqli_query($con,$mail_query2);
      $row2 = mysqli_fetch_array($run_query2);

      $brandid=$row2['product_brand'];

$mail_query3 = "SELECT * from brands where brand_id='$brandid' ";
      $run_query3 = mysqli_query($con,$mail_query3);
      $row3 = mysqli_fetch_array($run_query3);

      $brandname=$row3['brand_title'];




      echo "
              

      <div class='col-md-4 col-sm-6'>
      <div class='product-item'>
        <div class='product-show'>         
          <img src='admin_area/product_images/$pro_image' alt=''>
        </div>
        <div class='product-info'>
          <div class='p-title'>$pro_title</div>
          <form action='social.php' method='POST'>
          <input type='hidden' name='val' value='$pro_id'/>
          <button  id='product' class='btn btn-primary' name=addToCart>$brandname</button>
        </form>
          
          <span class='p-price-sale'>₹.$pro_price.00</span>
          <form action='youaregreat.php' method='POST'>
          <input type='hidden' name='val' value='$pro_id'/>
           <button style='float:right;' id='product' class='btn btn-danger btn-xs' name=addToCart>AddToCart</button>
           </form>
        </div>
      </div>
     
    </div><!--col-md-4 col-sm-7 --> 

      ";
   
    @$_SESSION["find"]= $keyword;
  }
  ?>

</div>
</div>

  
  
</body>

</html>
