
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
$user = $_SESSION['username']; 
$fuser = $_GET['user']; 
$checkuserfollow = mysqli_query($db, "SELECT * from `userfollow` where username = '$fuser' and `follower` = '$user'");

if(mysqli_num_rows($checkuserfollow) <1)
{

$follow = mysqli_query($db,"UPDATE `users` SET `followers`= followers +1 WHERE username = '$fuser'"); 
$followh = mysqli_query($db,"UPDATE `users` SET `following`= following +1 WHERE username = '$user'"); 
$addtofollow = mysqli_query($db,"INSERT INTO `userfollow`(`username`, `follower`)  VALUES ('$fuser', '$user')"); 


if($follow)
{

    mysqli_close($db); 
    echo "<script>window.location.href='authorpage.php?username=$fuser';</script>";
    exit;	


}

}
else{
echo '<script>alert("you already follow this user")</script>';
    echo "<script>window.location.href='authorpage.php?username=$fuser';</script>";

}

?>









