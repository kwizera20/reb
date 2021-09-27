

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="font-family:Times New Roman, Times, serif; font-size: 17px;">
  <div class="container">
    <!-- ======= Header ======= -->
    <section>    
      <div class="row">
        <div class="col-12">      
        <img src="images/header.png" style="width: 100%; height: 200px;" alt="">
        </div>
      </div>
   
    </section>
    <!-- =======End of header ====== -->

    <!-- Main content -->
    <section class="content pt-0">
          <div class="content-header text-center">
            <h3 style="font-family:Times New Roman, Times, serif;"><u>MISSION AUTHORISATION</u></h3>
           </div>
      
      <table class="table table-borderless">
    <!-- <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
      </tr>
    </thead> -->
    <tbody>
      <tr>
        <td style="">1. Issue to</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">2. Function</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">3. Purpose of Mission</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">4. Supervising Authority</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">5. District Of Origin</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">6. Destination</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">7. Distance in Km(to and from)</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">8. Depature date</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">9. Return date</td>
        <td><?php echo $row ['return_date'];?></td>
      </tr>
      <tr>
        <td style="max-width:10px">10. Duration(number of days)</td>
        <td>></td>
      </tr>
      <tr>
        <td style="max-width:10px">11. Vehicle identification</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px">12. Mission allowance</td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px"><strong>Issued at Kigali on.../02/2021</strong></td>
      </tr>
      <tr>



        <td style="max-width:10px">Authorised by:<?php echo "  "?></td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px"></td>
        <td>Visa for destination</td>
      </tr>
      <tr>
        <td style="max-width:10px"></td>
        <td></td>
      </tr>
      <tr>
        <td style="max-width:10px" ></td>
        <td></td>
      </tr>
      

    </tbody>
  </table>
  <table class="table table-borderless">
    <tbody>
      <tr>
        <td><strong>Dr. MBARUSHIMANA Nelson</strong><br>Director General</br></td>
        <td>Stamp and Signature</td>
      </tr>
      <tr>
        <td style="max-width:10px"></td>
        <td>Arrival date: <?php echo "  "?></td>
      </tr>
      <tr>
        <td style="max-width:10px"></td>
        <td>Depature date<?php echo "  "?>?></td>
      </tr>
    </tbody>
    <?php  
            
          
                ?>
  </table>
    </section>
    <!-- /.content -->
    <div class="button1">
                <button type="submit" name="reject" class="btn btn-primary "><a href="confirmed.php?missionid=<?php echo  $newid; ?>" style="text-decoration:none;color:white">Confirm</a></button> 
            <button type="submit" name="reject" class="btn btn-danger "><a href="reject.php?missionid=<?php echo  $newid; ?>" style="text-decoration:none;color:white">Reject</a></button> 
        </div>  
    <!-- ======= Footer ======= -->
    <section>
    <div class="row">
        <div class="col-12">
            <img src="images/footer.png" style="width: 100%; height: 80px;" alt="" class="mb-0">
        </div>
      </div>
            
    </section>
      <!-- =======End of Footer ====== -->
  </div>

  


  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>