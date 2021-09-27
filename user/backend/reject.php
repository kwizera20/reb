<?php
    include "connect.php";
    if(isset($_GET["missionid"])){
        $newid=$_GET["missionid"];
        $update="UPDATE mission_order SET status='rejected' WHERE id='$newid'; ";
        $query=mysqli_query($db,$update);
        if($query){
            echo "<script>alert('You have rejected this letter!')</script>";
            echo "<meta http-equiv='refresh' content='2; url=../rejected.php'>";
        }

    }

   

?>