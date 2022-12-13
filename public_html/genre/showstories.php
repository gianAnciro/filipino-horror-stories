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
  <h1 class="horror-text">List of stories</h1>

</center>
</br>

<center>
  
<table >
  <tr>
    <td>Title</td>
        <td>Genre</td>
        <td>Author</td>
                <td>likes</td>

        <td>Date</td>

    <td>Read</td>


  </tr>


<?php

include "../connect.php"; 

$genre = $_GET['genre']; 

echo "stories from ". "$genre" . "</br>
";
$records = mysqli_query($db,"select * from stories where genre = '$genre' ORDER BY title"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>

<td><?php echo $data['title']; ?></td>
<td><?php echo $data['genre']; ?></td>
<td><?php echo $data['username']; ?></td>
<td><?php echo $data['likes'] . " ♥"; ?></td>
<td><?php echo $data['date']; ?></td>


    <td><a href="../read.php?title=<?php echo $data['title']; ?>">read</a></td>
  </br>
  </tr>	



<?php
}
?>

</center>






<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
<i class="fa fa-bars" aria-hidden="true"></i>
  </a>

  <menu class="items-wrapper">
    <a href="../profile.php" class="menu-item fa fa-user"></a>
    <a href="../write.php" class="menu-item fa fa-pencil-square-o"></a>
    <a href="../stories.php" class="menu-item fa fa-list"></a>
<a href="../homepage.php" class="menu-item fa fa-home"></a>
  </menu>

</div>











</body>
</html>
