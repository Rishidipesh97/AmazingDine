<!DOCTYPE html>
<html lang="en" >
<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
?>

<head>
    <meta charset="UTF-8">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="cartcss/style.css">
      <link rel="stylesheet" href="navbarcss/style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <style>
      a:hover{
        text-decoration: none;
        color: white;
      }
    </style>


  
</head>

<body>

 <ul class="nav" >
      <li class="navItem"><a href="#">Home</a></li>
      <li class="navItem"><a href="hotdeals.php">Hot Deals</a></li>
      <li class="navItem"><a href="cuisines.php">Cuisines</a></li>
      <li class="navItem"><a href="cart.php">Cart</a></li>
      <li class="navItem"><a href="contact.php">Contact Us</a></li>
      <li class="navItem"><a href="login_form.php">SignUP/LogIn</a></li>
    </ul>
  <p><br/></p>

    <h1 style="color: white">Cart</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th style='font-size:23px'>Name</th>
          <th style='font-size:23px'>Quantity</th>
          <th style='font-size:23px'>Price</th>
          <th style='font-size:23px'>Remove</th>
        </tr>
      </thead>
    </table>
  </div>

  

  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        $to=0;
        $mail_query1 = "SELECT * from cart where ip_add='$ip_add' ";
  $run_query1 = mysqli_query($con,$mail_query1);
  if(mysqli_num_rows($run_query1) > 0)
  {
    while($row = mysqli_fetch_array($run_query1))
    {
      $p_id   = $row['p_id'];
      $user_id = $row['user_id'];
      $qty = $row['qty'];

      //////////////////////content from cart
      /////////////////////////now product info

      $mail_query2 = "SELECT * from products where product_id='$p_id' ";
      $run_query2 = mysqli_query($con,$mail_query2);
      $row2 = mysqli_fetch_array($run_query2);

      $brandid=$row2['product_brand'];
      $title=$row2['product_title'];
      $price=$row2['product_price'];
     
            ?>
        <tr>
          <td><?php  echo "<p style='font-size:23px'>$title</p>"  ?></td>
          <td><?php  echo "<p style='font-size:23px'>$qty</p>"  ?></td>
          <td><?php  echo "<p style='font-size:23px'>$price</p>"  ?>
          <?php   $to=$to+($price * $qty); ?>
          </td>
          <td>
           <center>
              <?php 
          echo   "<form action='iwillmakeit.php' method='post'>
          <input type='hidden' name='val' value='$p_id'/>
           <button style='float:left;font-size: 12px'  class='btn btn-danger btn-xs' name=addToCart>REMOVE</button>
           </form>";
?>
         </center>
         </td>
        </tr>
        <?php
}}

        ?>
      </tbody>
    </table>
  </div>

</section>

<div style="color: white;font-size: 20px;font-family:'Open Sans', sans-serif;">
<center><h3>
  <p><br/></p>
<p>Total :<?php  echo " ₹ ".$to   ?></p>

<p>Delievery :</p>

<p>Discount :</p>
<p>Net Total :</p>
</h3></center>
</div>

 <p><br/></p>

 <table>
  <tr>
    <td><a href="#"><button type="button" class="btn btn-danger" style="float: right;font-size: 20px "><- Back To Shopping</button></a></td>
    <td><a href="checkout.php"><button type="button" style="font-size: 20px" class="btn btn-success">Checkout-></button></a></td>
  </tr>
 </table>





<!-- follow me template -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="cartjs/index.js"></script>



</body>

</html>
