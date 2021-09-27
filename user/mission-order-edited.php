<?php



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

  <title>mission order</title>

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
        include "includes/sidebar.php";
        $token=uniqid();
        $userid=$_SESSION['userid'];
        $select="SELECT * FROM users where id='$userid'; ";
        $sql=mysqli_query($db,$select);
        $row=mysqli_fetch_assoc($sql);
      ?>
    <section id="main-content" class="container" >
      <section class="wrapper">
        <div class="row">
            <img src="Header.png" alt="" style="width:100%;height:auto;"></img>
        <form action="backend/connection.php" method="POST">
  <div class="form-group row">
      <h3 class="text-center">mission authorization </h3>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Letter Id </label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" name="token" value=" <?php echo $token; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Issued to</label>
    <div class="col-sm-10">
  <input type="text" class="form-control" name="issued_to" value="<?php echo $row['firstname']." ".$row['lastname']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Function</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="role"  value="<?php echo $row['function'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Purpose of Mission</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" name="mission_purpose">
    </div>
</div>

<div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Supervising Authority</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" name="supervising_authority">
    </div>
</div>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">District of origin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="origin_district"> </input>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Destination</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="destination"> </input>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Distance in Km(To and From)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="distance"> </input>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label"> Departure date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="dep_date"> </input>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label"> Returning date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="return_date"> </input>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label"> Duration(Number of Days)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="duration"> </input>
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Vehicle identification</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vehicle_identification"> </input>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Mission Allowance</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mission_allowance"> </input>
    </div>
  </div>
  <div class="form-group row">
      <div class="col-md-6">
      <label>Issued at Kigali on<input type="date" name="issue_date" class="form-control form-control-lg" id="colFormLabelLg"></input></label>
                    <br/><br/>
                     <label>Authorized by: </label> 
                    <h4>Dr.Nelson MBARUSHIMANA</h4>
                    <h5>Director General</h5>
  </div>
  <div class="col-md-6">
  <label class="destination">Visa for the destination</label>
  <input type="text" class="form-control form-control-lg" name="visa_destination"></input>
                    <label class="stamp">Stamp and Signature</label>
                    <br/><br/>
                    <label>Arrival date <input type="date" class="form-control form-control-lg" name="arrival_date"></input></label>
                    <br/><br/>
                    <label>Departure date <input type="date" class="form-control form-control-lg" name="departure_date"></input></label>
</div>  
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