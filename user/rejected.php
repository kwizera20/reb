




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
<meta name="author" content="GeeksLabs">
<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
<link rel="shortcut icon" href="img/favicon.png">

<title>Rejected Orders</title>

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
    include "includes/sidebar.php";
  
  ?>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
          <li><i class="fa fa-bars"></i>Pages</li>
          <li><i class="fa fa-square-o"></i>Pages</li>
        </ol>
      </div>
    </div>
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Advanced Table
          </header>

    <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
              <th scope="col">Letter Id</th>
              <th scope="col">Letter token</th>
              <th scope="col">Purpose Of Mission</th>
              <th scope="col">Sender Name</th>
              <th scope="col">Sender Function</th>
              <th scope="col">View File</th>
              </tr>
              <?php 
                $sql="SELECT * from mission_order where  status='rejected';";
                $query1=mysqli_query($db,$sql);
                $num1=mysqli_num_rows($query1);
                if($num1>0){
                    while ($row1=mysqli_fetch_assoc($query1))
                    { 
                      ?>
              <tr> 
              <td><?php echo $row1 ['id'];?></td>
              <td><?php echo $row1 ['token'];?></td>
              <td><?php echo $row1 ['purpose_of_mission'];?></td>
              <td><?php echo $row1 ['issued_to'];?></td>
              <td><?php echo $row1 ['role'];?></td>
              <td><button class="btn btn-primary"><a href="">Review</a></button></td>
              </tr>
              <?php
            }
          }
          ?>
              
      
      Designed by <a href="">unica</a>
    </div>
</div>
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
