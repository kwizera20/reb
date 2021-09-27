<?php

include ('connect.php');
include ('auth.php');
$userid=$_SESSION['userid'];
$select="SELECT * FROM users where id='$userid' ";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($query);

if($row['role']=="dg"){
    $sql="SELECT * from reports";
    $query1=mysqli_query($db,$sql);
    if(mysqli_num_rows($query1)>0){
}
}elseif($row['role']=="hod"){
    $sql="SELECT * from reports where  sender_function='ud' OR sender_function='other';";
$query1=mysqli_query($db,$sql);
if(mysqli_num_rows($query1)>0){}
}elseif($row['role']=="ud"){
    $sql="SELECT * from reports where  sender_function='other';";
$query1=mysqli_query($db,$sql);
if(mysqli_num_rows($query1)>0){}
}else{
    $sql="SELECT * from reports where sender_id='$userid';";
$query1=mysqli_query($db,$sql);
if(mysqli_num_rows($query1)>0){}
}
?>