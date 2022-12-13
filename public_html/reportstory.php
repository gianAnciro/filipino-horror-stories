
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>










<?php

include "connect.php"; 
$ac = $_GET['title']; 



$report = mysqli_query($db,"UPDATE `stories` SET `reports`= reports +1 WHERE title = '$ac'"); 


    mysqli_close($db); 
    echo "<script>window.location.href='read.php?title=$ac';</script>";
    exit; 

?>









