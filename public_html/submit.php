
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

        $username = $_SESSION['username'];
        $title = $_REQUEST['title'];
                $genre = $_REQUEST['genre'];
        $stories = $_REQUEST['stories'];


$checkstory = mysqli_query($db, "SELECT * from `stories` where title = '$title' ");




if(mysqli_num_rows($checkstory) <1)
{

    
if(!empty($title) && !empty($stories))

{
       $submit = mysqli_query($db,"INSERT INTO `stories`(`username`, `date`, `title`, `stories`, `genre`)  VALUES ('$username', NOW(), '$title', '$stories', '$genre')");
echo '<script>alert("your story was submitted")</script>';
    echo "<script>window.location.href='allstories.php';</script>";

}

 



else{
echo '<script>alert("title or content required")</script>';
    echo "<script>window.location.href='write.php';</script>";
}

}







else{
echo '<script>alert("title or content of your story is already submitted")</script>';
    echo "<script>window.location.href='write.php';</script>";

}




?>



