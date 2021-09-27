<?php

    include "backend/connect.php";
    session_start();
    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $pwd=$_POST["pwd"];
        $select="SELECT * from users where email='$email';";
        $query=mysqli_query($db,$select);
        $row=mysqli_fetch_assoc($query);
        if(password_verify($pwd,$row['pwd'])){
          if(mysqli_num_rows($query) > 0){
            $_SESSION['userid']=$row['id'];
            if($row['role']=="dg"){
              echo "<script>Alert('Successfully logged in')</script>";
              header("location:dg-index.php");
              
            }
            elseif($row['role']=="hod")
            {
              echo "<script>Alert('Successfully logged in')</script>";
              header("location:hod-index.php");
            }
            elseif($row['role']=="ud")
            {
              echo "<script>Alert('Successfully logged in')</script>";
              header("location:ud-index.php");
            }
            elseif($row['role']=="other"){
            echo "<script>Alert('Successfully logged in')</script>";
            header("location:index.php");
            }
            else{
              echo "<script>Alert('failed logged in')</script>";
            }
        }else{
            echo "<script>Alert('failed logged in')</script>";
        }
        }
        
        
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="email" class="form-control" placeholder="email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="pwd" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">Login</button>
        <a href="register/register_form.php" class="btn btn-info btn-lg btn-block" type="submit">Signup</a>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
        </div>
    </div>
  </div>


</body>

</html>
