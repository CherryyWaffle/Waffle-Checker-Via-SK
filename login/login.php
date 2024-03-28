<?php
session_start();
if(isset($_POST['login'])){

  $password = $_POST['password'];
   if($password === '@VMR'){
     $_SESSION['login'] = true; header('LOCATION:../index.php'); die();
   } {
     echo "<div class='alert alert-danger'>wrong password, get password from t.me/Tamperdev</div>";
   }

 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>VMRChecker</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
<link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
	
<center>
        <div class="wrapper">
    <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
      <div class="card shadow-none bg-transparent">
        <div class="card-body p-md-5 text-center">
          <h2 class="text-white"><a style="color:white;" href="https://t.me/Tamperdev">VMRChecker</a></h2>
            <img src="assets/images/user.png" class="mt-5" width="150" alt="" />
          </div>
          </br>
          <p class="mt-2 text-white">Get password from telegram, t.me/Tamperdev</p><br>
          <form method="POST" id="signup-form" class="signup-form">
            <div class="form-group">
              <input type="text" class="btn btn-light" name="password" id="password"
                placeholder="Password" />
              <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div></br>

            <div class="form-group">
              <input type="submit" name="login" id="login" class="btn btn-light" value="Get-Access" />
            </div>
          </form>
        </div>
      </div>
    </div>
   </div>
  </div>
 </div>
</div>
</center>
</body>
</html>