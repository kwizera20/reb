<?php
session_start();
   if(empty($_SESSION['userid'])){
       header("location:login.php");
   }

?>