<?php

    include "backend/connect.php";
    include 'backend/auth.php';

?>
<?php

error_reporting(0);
$conn=mysqli_connect("localhost","root","","rebsys");

if($conn)
{
    echo"connected successfully";
}
else
{
    echo"failed";
}
            $sql= "SELECT * FROM confirmed";
            $connect=mysqli_query($conn, $sql);
            $num=mysqli_num_rows($connect);
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

  <!-- Bootstrap ../CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external ../css-->
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
        include "includes/dg-sidebar.php";
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
                  <th scope="col">Id</th>
                  <th scope="col">File token</th>
                  <th scope="col">File Type</th>
                  <th scope="col">File Name</th>
                  <th scope="col">Sender Name</th>
                  <th scope="col">Submition date</th>
                  <th cope="col">Status of the file</th>
                  <th scope="col">View File</th>
                  </tr>
                  <?php
                    if($num>0){
                        while ($row=mysqli_fetch_assoc($connect))
                        { ?>
                  <tr> 
                  <td><?php echo $row ['id'];?></td>  
                  <td><?php echo $row ['token'];?></td>
                  <td><?php echo $row ['file_type'];?></td>
                  <td><?php echo $row ['purpose_of_mission'];?></td>
                  <td><?php echo $row ['issued_to'];?></td>
                  <td><?php echo $row ['issue_date'];?></td>
                  <td><?php echo $row ['status'];?></td>
                  <td><button class="btn btn-primary"><a href="fetch-mission-order.php?id=<?php echo $row ['id'];?>">Review</a></button></td>
                  </tr>
                  <?php
                }
              }
              ?>
                </tbody>
              </table>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
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
