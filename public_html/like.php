
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
$title = $_GET['title']; 
$author = $_GET['author']; 
$g = mysqli_query($db, "SELECT * from `users` where username = '$user'");


$checkuserlikes = mysqli_query($db, "SELECT * from `userlikes` where username = '$user' and `title` = '$title'");


if(mysqli_num_rows($checkuserlikes) <1)
{

$like = mysqli_query($db,"UPDATE `stories` SET `likes`= likes +1 WHERE title = '$title'"); 
$addtolikes = mysqli_query($db,"INSERT INTO `userlikes`(`username`, `title`)  VALUES ('$user', '$title')"); 




while($data = mysqli_fetch_array($g))
{

$gen = $data['gender'];
$age = $data['age'];
$loc = $data['location'];



$notify = mysqli_query($db,"INSERT INTO `notification`(`liker`, `author`, `title` , `gender` , `age` , `location`)  
  VALUES ('$user', '$author', '$title', '$gen',  '$age', '$loc')"); 
}
if($like)
{

    mysqli_close($db); 
    echo "<script>window.location.href='read.php?title=$title';</script>";
    exit;	
}

}


else{
echo '<script>alert("you already like this story")</script>';
    echo "<script>window.location.href='read.php?title=$title';</script>";

}

?>









