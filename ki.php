<!DOCTYPE html>
  
<html lang="en" >
<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
?>

<head>
  <meta charset="UTF-8">
  <title>Amazing Dine</title>
  
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

       <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
      <link rel="stylesheet" href="cartcss/style.css">
      <link rel="stylesheet" href="navbarcss/style.css">

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Mouse+Memoirs:400,700);
* {
  box-sizing: border-box;
}

html, body {
  font: 16px "Mouse Memoirs";
  background: #ad6932;
  color: #523118;
  width: 100%;
  height: 100%;
}

.header {
  text-align: center;
  padding: 1em 0 2em;
  background-image: repeating-linear-gradient(45deg, #5f391c, #5f391c 100px, #865127 100px, #865127 200px);
  color: #f0dccd;
  box-shadow: 0 0 0 0.5em rgba(255, 255, 255, 0.25) inset;
}
.header h1 {
  font-size: 4em;
}
.header p {
  font-size: 1.2em;
  font-style: italic;
}

.cart-container {
  width: 100%;
  height: 280px;
  display: table;
}
.cart-container .empty {
  font-size: 3em;
  width: 100%;
  text-align: center;
  display: table-cell;
  vertical-align: middle;
}

.cart {
  list-style: none;
  height: 280px;
  width: 10000px;
  cursor: grab;
  position: relative;
  left: 0;
  transform: translate3d(0, 0, 0);
}
.cart .product {
  position: relative;
  width: 200px;
  height: 280px;
  float: left;
}
.cart .product:hover {
  z-index: 1;
}
.cart .product:nth-child(3n+1) .product-preview, .cart .product:nth-child(3n+1) .product-interactions {
  background: #E8B0AF;
}
.cart .product:nth-child(3n+2) .product-preview, .cart .product:nth-child(3n+2) .product-interactions {
  background: #FDDAC4;
}
.cart .product:nth-child(3n) .product-preview, .cart .product:nth-child(3n) .product-interactions {
  background: #F1D5A5;
}
.cart .product .product-preview {
  padding: 1em;
  height: 280px;
  position: relative;
}
.cart .product .product-preview .thumbnail {
  width: 100%;
  min-height: 120px;
  max-height: 200px;
}
.cart .product .product-preview .thumbnail .image {
  width: 100%;
  margin-top: 1em;
}
.cart .product .product-preview .product-paper {
  position: absolute;
  height: 75px;
  bottom: 0;
  background: rgba(255, 255, 255, 0.65);
  padding: 1em;
  display: block;
  width: 100%;
  margin-left: -1em;
}
.cart .product .product-preview .product-name {
  font-size: 1.6em;
  text-align: center;
}
.cart .product .product-preview .product-price {
  text-align: center;
  font-size: 1.2em;
}
.cart .product .product-quantity {
  font-size: 2em;
  width: 2em;
  height: 2em;
  text-align: center;
  padding: 0.35em 0;
  border-radius: 1em;
  position: absolute;
  top: 0.5em;
  right: 0.5em;
  background: #fff;
  transform: rotateZ(10deg);
  backface-visibility: hidden;
}
.cart .product:hover .product-interactions, .cart .product .visible {
  opacity: 1 !important;
  transform: perspective(600px) rotateX(0deg) !important;
}
.cart .product .product-interactions {
  position: absolute;
  bottom: 75px;
  width: 100%;
  height: 60px;
  border-bottom: 1px dashed rgba(0, 0, 0, 0.4);
  transform-origin: 50% 100% 0;
  transform: perspective(600px) rotateX(90deg);
  opacity: 0;
  transition: 0.4s all ease-in-out;
  display: table;
}
.cart .product .product-interactions .button {
  width: 32%;
  height: 60px;
  float: left;
  text-align: center;
  font-size: 5em;
  line-height: 0.75em;
  color: #999;
  background: rgba(255, 255, 255, 0.65);
  cursor: pointer;
  user-select: none;
  transition: 0.1s all ease-in-out;
  transform-origin: 50% 0 0;
  transform: perspective(600px);
  z-index: 0;
  position: relative;
  display: table-cell;
  vertical-align: middle;
}
.cart .product .product-interactions .button.plus {
  color: #7fb034;
}
.cart .product .product-interactions .button.minus {
  color: #a0ce5a;
}
.cart .product .product-interactions .button.del:after {
  content: "+";
  position: absolute;
  color: red;
  left: 50%;
  margin-left: -0.15em;
  transform: rotateZ(45deg);
}
.cart .product .product-interactions .button:nth-child(1), .cart .product .product-interactions .button:nth-child(2) {
  border-right: 1px dashed rgba(0, 0, 0, 0.1);
}
.cart .product .product-interactions .button:nth-child(2) {
  width: 36%;
}
.cart .product .product-interactions .button:active {
  font-size: 7em;
  background: #fff !important;
  box-shadow: 0 0 0 10px #fff !important;
  z-index: 10;
  line-height: 0.45em;
}
.cart .product .product-interactions .button:hover {
  background: rgba(255, 255, 255, 0.5);
}

.bill {
  margin: 0;
  padding: 1em;
  font-size: 1.4em;
  line-height: 1.6em;
  background: #F1D5A5;
  color: #48320b;
  width: 100%;
}
.bill .total {
  font-weight: bold;
  font-size: 1.6em;
}
.bill tr td {
  width: 50%;
  padding: 0.25em 20px;
}
.bill tr .label {
  text-align: right;
}

.actions {
  text-align: center;
  position: relative;
  width: 100%;
  height: 6em;
}
.actions .big-button {
  position: absolute;
  cursor: pointer;
  user-select: none;
  padding: 1em;
  width: 100%;
  font-size: 1.5em;
  transition: 0.1s all ease-in-out;
  box-shadow: 0 0 0 0 #6c411f;
}
.actions .big-button:active {
  z-index: 10;
  font-size: 2em;
}
.actions .big-button.return {
  background: #ad6932;
  color: #f0dccd;
}
.actions .big-button.return:hover {
  background: #6c411f;
}
.actions .big-button.return:before {
  content: "←";
}
.actions .big-button.go {
  background: #a0ce5a;
  color: #334715;
  font-size: 2em;
}
.actions .big-button.go:hover {
  background: #7fb034;
}
.actions .big-button.go:active {
  font-size: 2.5em;
  background: #bede8e;
  box-shadow: 0 0 0 10px #bede8e;
}

    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  
</head>

<body>

  <ul class="nav">
  <li class="navItem"><a href="#">Home</a></li>
  <li class="navItem"><a href="#">About</a></li>
  <li class="navItem"><a href="#">Blog</a></li>
  <li class="navItem"><a href="#">Contact</a></li>
  <li class="navItem"><a href="#">Pricing</a></li>
  <li class="navItem"><a href="#">Support</a></li>
</ul>


<div id="ct-content">

  <div class="header">
  <h1>
    Your cart
  </h1>
  <p>
    "I say let the world go to hell, but I should always have my tea."
  </p>
  <p>
    ― Fyodor Dostoyevsky, Notes from Underground
  </p>
</div>

 <?php
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
      $pro_image =$row2['product_image'];
            ?>
            <div class="cart-container">
  <div class="empty" style="display:none">
    No more twinkies ! 
  </div>

  <ul class="cart">

    <li class="product" data-price="4.9" data-quantity="2">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src='admin_area/product_images/<?php $pro_image ?>' />
        </div>
        <div class="product-paper">
          <div class="product-name">
            <?php echo $title ?>
          </div>
          <div class="product-price">
            <?php echo "₹"
.$price ?>
          </div>
        </div>
      </div>
      <div class="product-quantity">
        <?php echo $qty ?>
      </div>
      <div class="product-interactions">
        <div class="button plus">
          +
        </div>
        <div class="button minus">
          -
        </div>
        <div class="button del"></div>
      </div>
    </li>
 
    
  </ul>
</div>

<table class="bill">
  <tr class="subtotal">
    <td class="label">
      Subtotal :
    </td>
    <td class="value">
      $ 71.90
    </td>
  </tr>
  <tr class="salestax">
    <td class="label">
      Sales tax : 
    </td>
    <td class="value">
      $ 3.60
    </td>
  </tr>
  <tr>
    <td class="label">
      Shipping :
    </td>
    <td class="value">
      $ 5.00
    </td>
  </tr>
  <tr class="total">
    <td class="label">
      Total :
    </td>
    <td class="value">
      $ 80.50
    </td>
  </tr>
</table>
<div class="actions">
  <div class="big-button go">
    Get them !
  </div>
</div>
<div class="actions">
  <div class="big-button return">
    Return to shop
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>







         


  <?php 

      ///////////////////////brand info over
      ///////////////////////now cunstomer on the stage


      

      

      ////////////////////////////////////////////// transfer values to order table

     

     
        
   /*   echo $p_id ;
      echo "<p><br></p>" ;
      echo $user_id;
      echo "<p><br></p>" ;
      echo $qty;
      echo "<p><br></p>" ;
      echo $title;
      echo "<p><br></p>" ;
      echo $price;
      echo "<p><br></p>" ;*/
      
    }
  }


    
        
            

   ?>






  
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="cartjs/index.js"></script>
</body>

</html>
