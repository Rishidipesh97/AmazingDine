<?php
if(isset($_SESSION["uid"])){
	header("location:http://amazingdine.com/second/mail.php");
}
else
{
	header("location:http://amazingdine.com/second/login_form.php");
}
?>