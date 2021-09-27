<?php
include("backend/connect.php");
include("backend/auth.php");
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

  <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="app.css"> -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
      <?php

        include "includes/navbar.php";
        $userid=$_SESSION['userid'];
        $select="SELECT * FROM users where id='$userid' ";
        $query=mysqli_query($db,$select);
        $row=mysqli_fetch_assoc($query);
        
if($row['role']=="dg"){
  include "includes/dg-sidebar.php";
}
elseif($row['role']=="hod"){
  include "includes/hod-sidebar.php";
}elseif($row['role']=="ud"){
  include "includes/ud-sidebar.php";
}else{
  include "includes/sidebar.php";
}
      ?>
    <section id="main-content" class="container" >
      <section class="wrapper">
        <div class="row">
            <img src="Header.png" alt="" style="width:100%;height:auto;"></img>
        <form action="backend/report_submit.php" method="POST" enctype="multipart/form-data">
  <div class="form-group row">
      <h3 class="text-center">Fill Your Report Form Here </h3>
    <!-- <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Report Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Sender Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Function</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel">
    </div>
  </div> -->
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Report Subject</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" name="repsubject">
    </div>
</div>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Report Description</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Attach Report</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="report">
    </div>
  </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary" name="submit">Send</button>
</div>
</form>

</div>  
          
          <img src="Footer.png" alt="" style="width:100%;height:auto;"></img>
  </section>
</section>
Designed by <a href="">unica</a>
</section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>