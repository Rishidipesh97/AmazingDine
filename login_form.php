<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Simple Navigation Bar</title>
  
  
      <link rel="stylesheet" href="logincss/style.css">
      <link rel="stylesheet" href="navbarcss/style.css">

  
</head>

<body>

  <ul class="nav">
      <li class="navItem"><a href="index.php">Home</a></li>
      <li class="navItem"><a href="hotdeals.php">Hot Deals</a></li>
      <li class="navItem"><a href="cuisines.php">Cuisines</a></li>
      <li class="navItem"><a href="cart.php">Cart</a></li>
      <li class="navItem"><a href="contact.php">Contact Us</a></li>
      <li class="navItem"><a href="#">SignUP/LogIn</a></li>
    </ul>
<p><br/></p>
<p><br/></p>
<div class="center">
    <h3> Login </h3>
    <p><br/></p>
<p><br/></p>
    <div class="content-box">
      <div></div>
                <form action="login.php" method="post">
                  <input type="email" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
              <button>Login</button>
                </form>
  <p class="message">Not registered? <a href="customer_registration.php">Create an account</a></p>
    </div>
  </div>

  
</body>
  
  

</body>

</html>
