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
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
<link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>
    <body>

<center>
  <h1 class="horror-text">Your Profile</h1>












<?php

include "connect.php"; 

$user = $_SESSION['username']; 
$followers = mysqli_query($db,"select followers from users where username = '$user'"); 
$following = mysqli_query($db,"select following from users where username = '$user'"); 
$info = mysqli_query($db,"select * from users where username = '$user'"); 

?>





<img src="https://robohash.org/<?php echo $user . "?set=set5"; ?>"
width="150" height="150">



<?php
echo "</br>";
echo "</br>";
echo $user;
?>
<?php
while($data = mysqli_fetch_array($info))
{
?>
    <?php echo " </br>" . "Gender: " .  $data['gender'] ; ?>
    <?php echo " </br>" . "Age: " .  $data['age'] ; ?>
    <?php echo " </br>" . "Location: " .  $data['location'] ; ?>
    <?php echo " </br>" . "member since: " .  $data['datejoined'] ; ?>

<?php
}
?>
</br>

<?php
while($data = mysqli_fetch_array($followers))
{
?>


<?php echo "</br>"; ?>

<?php echo $data['followers']; ?>


<a href="followers.php"> followers</a> 


<?php
}
?>







<?php
while($data = mysqli_fetch_array($following))
{
?>



<?php echo $data['following']; ?>
<a href="following.php"> following</a> 


<?php
}
?>



</br></br>


<a href="messages.php">messages</a>
















</center>


<center>

 <a href="notifications.php"> 

<p>notifications<strong>

</strong></p>
</a>
  <a href="youlikethese.php"> 

<p>liked stories<strong>

</strong></p>
</a>



<a href="uwrotethese/uwrotethese.php"> 

<p>your stories <strong>

</strong></p>
</a>


<a href="users.php"> 

<p>Other Users <strong>

</strong></p>
</a>





    	<p> <a href="index.php" style= color: red;">logout</a> </p>
    






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

