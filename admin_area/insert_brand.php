
<form action="" method="post" style="padding:80px;">

<b>Insert New Bran:</b>
Name :<input type="text" name="new_brand" required/> 
<p><br/></p>
Address: <input type="text" name="address" required/> 
<p><br/></p>
Email :<input type="email" name="email" required/> 
<input type="submit" name="add_brand" value="Add Brand" /> 

</form>

<?php 
include("includes/db.php"); 

	if(isset($_POST['add_brand'])){
	
	$new_brand = $_POST['new_brand'];
	$add=$_POST['address'];
	$email=$_POST['email'];
	
	$insert_brand = "insert into brands (brand_title,email,address) values ('$new_brand','$email','$add')";

	$run_brand = mysqli_query($con, $insert_brand); 
	
	if($run_brand){
	
	echo "<script>alert('New Brand has been inserted!')</script>";
	echo "<script>window.open('index.php?view_brands','_self')</script>";
	}
	}

?>