
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
$ab = $_GET['user']; 



$report = mysqli_query($db,"UPDATE `users` SET `reports`= reports +1 WHERE username = '$ab'"); 


    mysqli_close($db); 
    echo "<script>window.location.href='authorpage.php?username=$ab';</script>";
    exit; 

?>









