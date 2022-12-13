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
<center>

</br>
<?php


include "connect.php"; 

$user = $_GET['username']; 
$records = mysqli_query($db,"select * from stories where username = '$user'"); 
$followers = mysqli_query($db,"select * from users where username = '$user'"); 
$info = mysqli_query($db,"select * from users where username = '$user'"); 









echo $user . "'s Profile";


echo "</br></br>";


?>







<img src="https://robohash.org/<?php echo $user . "?set=set5"; ?>"
width="150" height="150">
<?php
echo "</br></br>"
?>

<?php



while($data = mysqli_fetch_array($info))
{
?>

    <?php echo " </br>" . "Gender: " .  $data['gender'] ; ?>
    <?php echo " </br>" . "Age: " .  $data['age'] ; ?>
    <?php echo " </br>" . "Location: " .  $data['location'] ; ?>
        <?php echo " </br>" . "Member since: " .  $data['datejoined'] ; ?>

</br>

   <a href="reportuser.php?user=<?php echo $data['username']; ?>" onclick="return  confirm('do you want to report this user?')">report this user </a>

</br>
<?php
}
?>


<center>
      








<?php



while($data = mysqli_fetch_array($followers))
{
?>
    <?php echo " </br>" .  $data['followers'] . "followers"; ?>
<a href="follow.php?user=<?php echo $data['username']; ?>"> follow</a> 
    <?php echo "</br>"; ?>
<?php
}
?>

















<a href="chat.php?user=<?php echo $user ?>">chat</a>


</center>
</br></br></br></br>




<center>
       <?php echo "stories written by " . $user . "</br></br>"; ?>








<?php



while($data = mysqli_fetch_array($records))
{
?>
    <?php echo $data['title']; ?>
   <a href="read.php?title=<?php echo $data['title']; ?>">read</a>
    <?php echo "</br>"; ?>
<?php
}
?>
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
