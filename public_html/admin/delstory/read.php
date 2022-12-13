



<!DOCTYPE html>
<html>
<head>
  

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




     <link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<?php echo $data['title'] . "</br>"; ?>
<?php echo "written by " . $data['username'] . "</br>" . "</br>"; ?>



<?php echo wordwrap($data['stories'],50,"<br>\n",TRUE); ?>




<?php
}
?>





</center>
























</body>
</html>
