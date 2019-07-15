<?php

session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";


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

			/////////////////////product info complete
			//////////////////now time for brand info

			$mail_query3 = "SELECT * from brands where brand_id='$brandid' ";
			$run_query3 = mysqli_query($con,$mail_query3);
			$row3 = mysqli_fetch_array($run_query3);

			$brandname=$row3['brand_title'];
			$brandaddress=$row3['address'];
			$brandemail=$row3['email'];

			///////////////////////brand info over
			///////////////////////now cunstomer on the stage

			$mail_query4 = "SELECT * from user_info where user_id='$user_id'";
			$run_query4 = mysqli_query($con,$mail_query4);
			$row4 = mysqli_fetch_array($run_query4);

			 $cname=$row4['first_name'];
			 $cnumber=$row4['mobile'];
			 $cadd1=$row4['address1'];
			 $cadd2=$row4['address2'];

			 $mess1="Name :" .$cname. 
			 "  " .
			 "Address :" .$cadd1. " ". $cadd2. 
			 "  " .
			 "Product : ". $title.
			 "  " .
			 "Quantity :". $qty;

			

			 

			 $mess2="Name :" .$cname. 
			 "  " .
			 "Address :" .$cadd1. " ". $cadd2. 
			 "  " .
			 "Product : ". $title.
			 "  " .
			 "Quantity :". $qty.
			 " " .
			 "Price : " .$price*$qty.
			 "  " .
			 "Restraunt Address : ". $brandaddress ;


			$m1= wordwrap($mess1,70);
			$m2= wordwrap($mess2,70);
			mail('$brandemail',"order time",$m1);
			mail('drishi_be16@thapar.edu',"Delievery time time",$m2);
			mail('dipesh0439@gmail.com',"aagya order",$m2);

			////////////////////////////////////////////// transfer values to order table

			$insert_orders="insert into orders(user_id,product_id,qty,price) values ('$user_id','$p_id','$qty',$price*$qty)   ";


			$run_order = mysqli_query($con, $insert_orders); 

			$del="delete from cart where ip_add='$ip_add' AND p_id='$p_id'";

			$run_order = mysqli_query($con, $del); 
			 	
		/*	echo $p_id ;
			echo "<p><br></p>" ;
			echo $user_id;
			echo "<p><br></p>" ;
			echo $qty;
			echo "<p><br></p>" ;
			echo $brandid;
			echo "<p><br></p>" ;
			echo $title;
			echo "<p><br></p>" ;
			echo $price;
			echo "<p><br></p>" ;
			echo $brandname;
			echo "<p><br></p>" ;
			echo $brandaddress;
			echo "<p><br></p>" ;
			echo $cname;
			echo "<p><br></p>" ;
			echo $cnumber;
			echo "<p><br></p>" ;
			echo $cadd1;
			echo "<p><br></p>" ;
			echo $cadd2;*/
		}
	}



 header("Location:http://amazingdine.com/thankyou.php ");
?>