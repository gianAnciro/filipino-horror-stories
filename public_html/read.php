



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
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>
<body>

</br>

<?php




include "connect.php";


$title = $_GET['title']; 
$stories = mysqli_query($db,"select * from stories where title = '$title'"); 

   

?>



<center>

<?php






while($data = mysqli_fetch_array($stories))
{
?>


<?php echo "<font color=red  size='6pt'>" . $data['title'] . "</br>" . "</font>"; ?>
<?php echo "<font color=black  size='2pt'>" . " genre: ". $data['genre'] . "</br>" . "</font>"; ?>

<?php echo "<font color=black  size='2pt'>" . " ``". $data['date'] . "``". "</br>" . "</font>"; ?>

<?php echo "written by: "?>
    <td><a href="authorpage.php?username=<?php echo $data['username']; ?>"> <?php echo $data['username']; ?> </br>  </a></td>



<a href="like.php?title=<?php echo $data['title']; ?>&author=<?php echo $data['username']; ?>"> <i class="fas fa-heart"> </i> </a> 




<?php echo $data['likes'] . "</br>"; ?>


   <a href="reportstory.php?title=<?php echo $data['title']; ?>" onclick="return  confirm('do you want to report this story?')">report this story </a>
<a href="forum/forum.php?title=<?php echo $data['title']; ?>">discuss</a>
<?php echo "</br>"; ?>


-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.


</br></br>
<?php echo wordwrap($data['stories'],60,"<br>\n",TRUE); ?>

</br>




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
