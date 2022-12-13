
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

<center>
<?php




$title = $_GET['title']; 
echo "comment section for ";
echo $title . "</br>" . "</br>";



include "connect.php"; 
?>


       <div style=" height:400px; overflow:auto; border-style: groove;">

<?php





$records = mysqli_query($db,"select * from comments where title = '$title' "); 

while($data = mysqli_fetch_array($records))
{
?>

<div style='color:black;'>
    
   <img src="https://robohash.org/<?php echo $data['username'] . "?set=set5"; ?>"
width="30" height="30"> 


    <font color=red  size='4pt'>

<?php echo $data['username'] . ": "; ?>


<?php echo wordwrap($data['comment'],30,"<br>\n",TRUE); ?>
</font>
</div>

</br>



<?php
}
?>

</center>
































<center>




<div class="footer">

<center>



		<form action="comment.php" method="post">

		
<input type='hidden' name='title' value='<?php echo "$title";?>'/> 


		








    <textarea  id="textsend" onkeyup="success()" style="height:60px; width:300px;" name="comment">
</textarea></br>





      <input type="submit" id="button" disabled value="send" style="height:30px; width:300px;" >
	</form>












</center>


















</center>

</br>




</div>

</div>
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

<script>
function success() {
	 if(document.getElementById("textsend").value==="") { 
            document.getElementById('button').disabled = true; 
        } else { 
            document.getElementById('button').disabled = false;
        }
    }
</script>

</body>
</html>

