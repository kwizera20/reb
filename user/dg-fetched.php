
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
            if(isset($_GET['id'])){
                $newid=$_GET['id'];
            $sql= "SELECT * FROM approve_2 where id='$newid' ";
            $connect=mysqli_query($conn, $sql);
            $num=mysqli_num_rows($connect);
            }
            ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
  <body>
      
                <!-- $issued=$_POST['issued_to'];
                $function=$_POST['role'];
                $missionPurpose=$_POST['purpose_of_mission'];
                $supervisingAuthority=$_POST['supervising_authority'];
                $districtOfOrigin=$_POST['origin_district'];
                $destination=$_POST['destination'];
                $distance=$_POST['distance'];
                $depDate=$_POST['departure_date'];
                $returnDate=$_POST['returning_date'];
                $duration=$_POST['duration'];
                $vehicleIdentification=$_POST['vehicle_identification'];
                $missionAllowance=$_POST['mission_allowance'];
                $issueDate=$_POST['issue_date'];
                $authorizedBy=$_POST['authorized_by'];
                $signature=$_POST['signature'];
                $arrivalDate=$_POST['arrival_date'];
                $departureDate=$_POST['departured_date'];*/
                             -->
          
    <div class="container">
        <div class="row">
    <div class="header">
            <img src="Header.png" alt=""></img>
    </div>
    <form class="mission-order" action="backend/connect-dg.php" method="POST"> 
        <table>
            <tr>
                      
<?php
            if($num>0){
                while ($row=mysqli_fetch_assoc($connect))
                {
                    ?>
                     <tr><td><label for="token" hidden >Token</label></td><td><input name="token" type="text"  readonly="readonly" hidden value="<?php echo $row['token'];?>"></td></tr><br><br>
               
                <td class="label"><label> Issued to </label></td> <td class="input"> <input class="in" type="text" name="issued_to" value= "<?php echo $row ['issued_to'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Function </label></td> <td class="input"> <input class="in" type="text" name="role" value= "<?php echo $row ['role'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label>Purpose of Mission </label></td> <td class="input"> <input class="in" type="text" name="mission_purpose" value= "<?php echo $row ['purpose_of_mission'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Supervising Authority </label></td> <td class="input"> <input class="in" type="text" name="supervising_authority" value= "<?php echo $row ['supervising_authority'];?>"></input> </td>
                </tr>    
                <tr>
                <td class="label"><label>District of origin </label></td> <td class="input"> <input class="in" type="text" name="origin_district" value= "<?php echo $row ['district_of_origin'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Destination </label></td> <td class="input"> <input class="in" type="text" name="destination" value= "<?php echo $row ['destination'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Distance in Km(To and From) </label></td> <td class="input"> <input class="in" type="number" name="distance" value= "<?php echo $row ['distance'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Departure date </label></td> <td class="input"> <input class="in" type="date" name="dep_date" value= "<?php echo $row ['departure_date'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Returning date</label></td> <td class="input"> <input class="in" type="date" name="return_date" value= "<?php echo $row ['returning_date'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Duration(Number of Days) </label></td> <td class="input"> <input class="in" type="text" name="duration" value= "<?php echo $row ['duration'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Vehicle identification </label></td> <td class="input"> <input class="in" type="text" name="vehicle_identification" value= "<?php echo $row ['vehicle_identification'];?>"></input> </td>
                </tr>
                <tr>
                <td class="label"><label> Mission Allowance </label></td> <td class="input"> <input class="in" type="text" name="mission_allowance" value= "<?php echo $row ['mission_allowance'];?>"></input> </td>
                </tr>
                </table>
            <div class="row signature">
                <div class="col-md-6 right">
                    <label>Issued at Kigali on <input class="in" type="date" name="issue_date" value= "<?php echo $row ['issue_date'];?>"></input></label>
                    <br/><br/>
                    <label>Authorized by: <input class="in" type="text" name="authorized_by" value= "<?php echo $row ['authorized_by'];?>"></input></label>
                    <h4>Dr.Nelson MBARUSHIMANA</h4>
                    <h5>Director General</h5>
                </div>
                <div class="col-md-6 left">
                    <label class="destination">Visa for the destination</label>
                    <input class="in" type="text" name="visa_destination" value= "<?php echo $row ['signature'];?>"></input>
                    <label class="stamp">Stamp and Signature</label>
                    <br/><br/>
                    <label>Arrival date <input class="in" type="date" name="arrival_date" value= "<?php echo $row ['arrival_date'];?>"></input></label>
                    <br/><br/>
                    <label>Departure date <input class="in" type="date" name="departure_date" value= "<?php echo $row ['departure_date'];?>"></input></label>
                </div>
            </div> 
            <?php
                }
            }
                ?>
                <div class="button1">
            <button type="submit" class="btn btn-primary">Approve</button>
            <button type="" class="btn btn-danger"><a href="backend/reject.php?missionid=<?php echo $newid ?>">Reject</a></button> 
        </div>   
        </form> 
        <div className="footer">
            <img src="Footer.png" alt=""></img>
    </div>
        </div>
    </div>        
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
