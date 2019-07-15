<?php

session_start();
$ip_add = getenv('REMOTE_ADDR');
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Amazing Dine</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="socialcss/style.css">
      <link rel="stylesheet" href="navbarcss/style.css">
  
</head>

<body>

  <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
  <ul class="nav">
      <li class="navItem"><a href="index.php">Home</a></li>
      <li class="navItem"><a href="hotdeals.php">Hot Deals</a></li>
      <li class="navItem"><a href="cuisines.php">Cuisines</a></li>
      <li class="navItem"><a href="cart.php">Cart</a></li>
      <li class="navItem"><a href="contact.php">Contact Us</a></li>
      <li class="navItem"><a href="login_form.php">SignUP/LogIn</a></li>
    </ul>
  <!-- /.container -->
</nav>
<?php
  
  $p_id="53";
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
      $brandpimage=$row3['pimage'];
      $brandbimage=$row3['backimage'];
      $cnumber=$row3['cnumber'];
      ?>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-md-6">
       <center> <div class="deck-of-cards">
          <div class="card">
            <div class="card" id="c2">
              <div class="card" id="c3">
                <div class="card-img">
                  <?php echo "<img src='admin_area/back_image/$brandbimage' />" ; ?>
                </div>
                <div class="card-desc">
                  <h3> <?php  echo  $brandname ;  ?></h3>
                  <ul>
                    <li><?php   echo $brandaddress;  ?></li>
                    <li><?php   echo $cnumber;  ?></li>                    
                  </ul>
                </div>
              </div>
            </div>
          </div>


        </div>
      </center>
      </div>
      <p><br/></p>

        <div class="col-lg-6 col-md-6">
       <div class='comment-box-sm' style="float: left">
       
          <img 
               src='dinner.svg' width=50px height=50px 
           />
          <p></p>
          <button type="button" class="btn btn-danger">ratting</button>
              </div>
      </div>


      <div class="col-lg-6 col-md-6">
       <div class='comment-box-sm' style="float: right">
       
          <img 
               src='dinner.svg' width=50px height=50px 
           />
          <p></p>
          <a href="reserve.php"><button type="button" class="btn btn-danger">Reserve Table</button></a>
              </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a name="services"></a>
<div class="content-section-a">

  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2>Pick a Card - Any Card </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="showcase">
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.content-section-a -->

<a name="contact"></a>
<div class="banner">

  <div class="container">

    <div class="row">
      <div class="col-lg-6 text-center">
        <h2>Contact<br> Rebecca Hovemeyer</h2>
      </div>
      <div class="col-lg-6">
        <p>Email: xxhovemeyer@yahoo.com</p>
        <p>Linkin: Here you go!</p>
        <p>Phone: XXX-XXX-XXXX</p>
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.banner -->

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-inline">
          <li>
            <a href="#">Home</a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#about">About</a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#services">Services</a>
          </li>
          <li class="footer-menu-divider">&sdot;</li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  

</body>

</html>
