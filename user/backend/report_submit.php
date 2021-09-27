<?php
    include ('connect.php');
    include ('auth.php');
    $userid=$_SESSION['userid'];
    $select="SELECT * FROM users where id='$userid' ";
    $query=mysqli_query($db,$select);
    $row=mysqli_fetch_assoc($query);


    if(isset($_POST['submit'])){
        $repsubject=$_POST['repsubject'];
        $sendername=$row['firstname']." ".$row['firstname'] ;
        $senderfunction=$row['role'];
        $sender_id=$userid;
        $description=$_POST['description'];
        $repid=uniqid('',true);
        $subdate=date("y-m-d");
        $report=$_FILES['report']['name'];
        $tempName=$_FILES['report']['tmp_name'];
        $extension=explode('.', $report);
        $actualExt=strtolower(end($extension));
        $reportNewName=uniqid('',true).'.'.$actualExt;
        $target_dir="../files/reports/".$reportNewName;
        $move=move_uploaded_file($tempName, $target_dir);
        if($move){
             $insert="INSERT INTO reports(report_id,sender_id,sender_name,sender_function,report_subject,report_description,report_attachement,subdate)values
             ('$repid','$sender_id','$sendername','$senderfunction','$repsubject','$description','$reportNewName','$subdate');";
        $sql=mysqli_query($db,$insert);
        if($sql){
             echo "<script>alert('Your report has been successfully submitted. ')</script>";
             echo "<meta http-equiv='refresh' content='2; url=../report.php'>";
      
    }else{
        echo "<script>alert('Submission Failed. Try again. ')</script>";
    }
        }else{
            echo "<script>alert('Your report has been successfully submitted. ')</script>";
    }
        }
    



?>