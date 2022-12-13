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


<!DOCTYPE html>
<html>
<head>
  <title></title>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
</br></br></br></br>


<center>
       <div style=" height:320px; overflow:auto;">
<table border="2">
  <tr>
    notifications

  </tr>

<?php

include "connect.php"; 

$user = $_SESSION['username'];
$records = mysqli_query($db,"select * from userfollow where username = '$user'"); 
$abcd = mysqli_query($db,"select * from notification where author = '$user'"); 


while($data = mysqli_fetch_array($records))
{

?>
  <tr>

    <td><a href="authorpage.php?username=<?php echo $data['follower']; ?>"> <?php echo $data['follower']; ?>   </a>followed you</td>

  </tr>	



<?php
}
?>









<?php


while($data = mysqli_fetch_array($abcd))
{

?>
  <tr>

    <td><a href="authorpage.php?username=<?php echo $data['liker']; ?>"> <?php echo $data['liker']; ?>   </a>liked your story <?php echo $data['title']; ?></td>

  </tr>	



<?php
}
?>































</table>

</div>
</center>



















<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
<i class="fa fa-bars" aria-hidden="true"></i>
  </a>

  <menu class="items-wrapper">
    <a href="profile.php" class="menu-item fa fa-user"></a>
    <a href="write.php" class="menu-item fa fa-pencil-square-o"></a>
    <a href="stories.php" class="menu-item fa fa-list"></a>
<a href="homepage.php" class="menu-item fa fa-home"></a>
  </menu>

</div>
</body>
</html>
