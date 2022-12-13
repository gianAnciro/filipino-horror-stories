<?php
include_once 'readhaha.php';

$result = mysqli_query($conn,"SELECT title FROM stories order by RAND() limit 5");
$stories = mysqli_query($conn,"SELECT title FROM stories order by RAND() limit 5");
?>
<!DOCTYPE html>
<html>
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

<center>
       <div style=" height:320px; overflow:auto;">
<table>
<tr>
<td>top 5 random stories</td>
</tr>

<?php


$i=0;
while($row = mysqli_fetch_array($result)) {
$data = mysqli_fetch_array($stories)
?>

<tr >
<td><?php echo $row["title"]; ?></td>


    <td><a href="../read.php?title=<?php echo $row['title']; ?>">Read</a></td>
</tr>
<?php
$i++;
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
    <a href="../profile.php" class="menu-item fa fa-user"></a>
    <a href="../write.php" class="menu-item fa fa-pencil-square-o"></a>
    <a href="../stories.php" class="menu-item fa fa-list"></a>
<a href="../homepage.php" class="menu-item fa fa-home"></a>
  </menu>

</div>
</body>
</html>
