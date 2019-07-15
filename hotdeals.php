<?php
session_start();
if(isset($_SESSION["uid"])){
	
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Amazing Dine</title>
  
  
  	  <link rel="stylesheet" href="navbarcss/style.css">
      <link rel="stylesheet" href="slidecss/style.css">

  
</head>

<body>

  <body>
  	<ul class="nav">
      <li class="navItem"><a href="index.php">Home</a></li>
      <li class="navItem"><a href="#">Hot Deals</a></li>
      <li class="navItem"><a href="cuisines.php">Cuisines</a></li>
      <li class="navItem"><a href="cart.php">Cart</a></li>
      <li class="navItem"><a href="contact.php">Contact Us</a></li>
      <li class="navItem"><a href="login_form.php">SignUP/LogIn</a></li>
    </ul>

	<div class="slideContainer">
    	<div class="picture">
      		<img src="https://images.unsplash.com/photo-1485646485012-f09e6a19d9c4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=35deb3c9cdf9c401a71377fb09238eb4&auto=format&fit=crop&w=1500&q=80">
    	</div>
    	<div class="picture">
     	 	<img src="https://images.unsplash.com/photo-1497120573086-6219573cf71c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ce6032d8d7955f6d9601c7293dab2f2f&auto=format&fit=crop&w=1052&q=80">
   	 	</div>
    	<div class="picture">
      		<img src="https://images.unsplash.com/photo-1486758206125-94d07f414b1c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5dd0763cb8402ca760ec8d37336eb372&auto=format&fit=crop&w=1050&q=80">
    	</div>
    	<div class="arrow">
      		<a class="previous" onclick="slideMove(-1)">&#10094;</a>
      		<a class="next" onclick="slideMove(1)">&#10095; </a>
    	</div>
    </div>
    <iframe src="http://amazingdine.com/inspiration/" width="100%" height="400px"></iframe>

</body>
  
  

    <script  src="slidejs/index.js"></script>




</body>

</html>
