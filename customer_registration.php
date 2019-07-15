<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Minimal Material Signup Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="signcss/style.css">

  
</head>

<body>

  <div class="container">
  <h2>Signup</h2>
  <div class="row">
    <form class="col s12" action="register.php" method="post">
     
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="f_name">
          <label for="first_name">First Name</label>
        </div>

        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="l_name">
          <label for="last_name" >Last Name</label>
        </div>
      </div>

            <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" data-error="wrong" data-success="right" >Email</label>
        </div>
      </div>

            <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password" >Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="repassword">
          <label for="password" >Re-enter Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="text" class="validate" name="mobile">
          <label for="password">Mobile</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="text" class="validate" name="address1">
          <label for="password">Address Line 1</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="text" class="validate" name="address2">
          <label for="password">Address Line 2</label>
        </div>
      </div>

      <button class="btn btn-flat waves-effect waves-dark white grey-text text-darken-3" type="submit" name="action">Signup
  </button>
    </form>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js'></script>

  

    <script  src="signjs/index.js"></script>




</body>

</html>
