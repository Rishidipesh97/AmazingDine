<?php

session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";


	$remove_id = $_POST["val"];
	echo $remove_id;
	
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
				echo "in";
		header("Location:http://amazingdine.com/second/cart.php");
		exit();
	}

echo "out";


?>