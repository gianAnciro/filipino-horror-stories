<!DOCTYPE html>
<html>
<head>
  <title></title>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../styles.css">
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

<?php
}
?>


<center>
      








<?php



while($data = mysqli_fetch_array($followers))
{
?>
    <?php echo   $data['followers'] . "followers"; ?>
    <?php echo "</br>"; ?>
<?php
}
?>













</center>
</br>



<center>
       <?php echo "stories written by " . $user . "</br>"; ?>








<?php



while($data = mysqli_fetch_array($records))
{
?>
    <?php echo $data['title']; ?>
   <a href="../delstory/read.php?title=<?php echo $data['title']; ?>">read</a>
    <?php echo "</br>"; ?>
<?php
}
?>
</center>













</body>
</html>
