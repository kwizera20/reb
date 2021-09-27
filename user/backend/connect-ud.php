<?php
  include 'connect.php';
  $token=$_POST['token'];
$issued=$_POST['issued_to'];
$function=$_POST['role'];
$missionPurpose=$_POST['mission_purpose'];
$supervisingAuthority=$_POST['supervising_authority'];
$districtOfOrigin=$_POST['origin_district'];
$destination=$_POST['destination'];
$distance=$_POST['distance'];
$depDate=$_POST['dep_date'];
$returnDate=$_POST['return_date'];
$duration=$_POST['duration'];
$vehicleIdentification=$_POST['vehicle_identification'];
$missionAllowance=$_POST['mission_allowance'];
$issueDate=$_POST['issue_date'];
$authorizedBy=$_POST['authorized_by'];
$signature=$_POST['visa_destination'];
$arrivalDate=$_POST['arrival_date'];
$departureDate=$_POST['departure_date'];


$insert="INSERT INTO approve_1(token,file_type,issued_to,role,purpose_of_mission,supervising_authority,
district_of_origin,destination,distance,departure_date,returning_date,duration,vehicle_identification,
mission_allowance,issue_date,authorized_by,signature,arrival_date,departured_date,status) VALUES('$token','Mission order','$issued','$function',
'$missionPurpose','$supervisingAuthority','$districtOfOrigin','$destination','$distance','$depDate','$returnDate',
'$duration','$vehicleIdentification','$missionAllowance','$issueDate','$authorizedBy','$signature','$arrivalDate',
'$departureDate','Aproved');";


$query=mysqli_query($db,$insert);

if($query){
    echo "<script>alert('Successfully submitted. ')</script>";
             echo "<meta http-equiv='refresh' content='2; url=../ud-index.php'>";
}
else{
    echo "<script>alert('Submission Failed. Try again ')</script>";
}
?>


