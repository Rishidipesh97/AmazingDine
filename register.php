<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>404 Page pure CSS</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="errorcss/style.css">

  
</head>
<body>

  <html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="viewport" content="width=device-width">
</head>
<body>
	
<?php
session_start();
include "db.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2)){
		
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>Please Fill All Fileds</h2>
			</hgroup>
			<h4><a href='customer_registration.php' title='Back to site' class='error-back'>back</a></h4>
		</article>
	</div>
		";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>This $f_name is not valid..!</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>This $l_name is not valid..!</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>This this $email is not valid..!</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	}
	if(strlen($password) < 7 ){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>Password is weak</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	}
	if(strlen($repassword) < 7 ){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>Password is weak</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>Password doesn't match</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
	}
	
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>Mobile number must be 10 digit</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='error-page-wrap'>
		<article class='error-page gradient'>
			<hgroup>
				<h1>oops!</h1>
				<h2>Email Address is already available Try Another email address</h2>
			</hgroup>
			<a href='customer_registration.php' title='Back to site' class='error-back'>back</a>
		</article>
	</div>
		";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
		if(mysqli_query($con,$sql)){
			echo "register_success";
			header("Location:http://amazingdine.com/second/es.php");
			exit();
		}
	}
	}
	
}



?>
</body>
</html>
  
  

</body>

</html>























































