<?php
session_start();
if(isset($_SESSION["uid"])){
	
}
?>
<!DOCTYPE HTML>

<html>
	<head>

		<link rel="stylesheet" href="navbarcss/style.css">
		<link rel="stylesheet" href="landcss/style.css">
		
		<style type="text/css">
			.whole{
				font-family:Bookman;
			}
			.a{
				color:red;
			}
			.second{
				position: absolute;
				top:100%;
			}
			
					
		</style>

	</head>



	<body>

		<ul class="nav">
		  <li class="navItem"><a href="#">Home</a></li>
		  <li class="navItem"><a href="hotdeals.php">Hot Deals</a></li>
		  <li class="navItem"><a href="cuisines.php">Cuisines</a></li>
		  <li class="navItem"><a href="cart.php">Cart</a></li>
		  <li class="navItem"><a href="contact.php">Contact Us</a></li>
		  <li class="navItem"><a href="login_form.php">SignUP/LogIn</a></li>
		</ul>
		
		 <div class="container" >
		  <div class="cover">
		  	<h1 style="font-family:Bookman;font-size: 4em"><span style="color: red;">A</span>mazing Dine</h1>
		    <h1 style="font-family:Bookman">Discover what's out there.</h1>
		    <form  class="flex-form" action="es.php" method="post">
		      <label for="from">
		        <i class="ion-location"></i>
		      </label>
		      <input type="search" placeholder="What you want to eat ?" name="search">
		      <input type="submit" value="Search">
		    </form>
		    <div id="madeby">
		      <span>
		        
		      </span>
		    </div>
		  </div>
		</div>
		<!--landing done now slide show-->

		
		

  
 		
		 
	</body>
</html>
