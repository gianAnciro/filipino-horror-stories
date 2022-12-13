

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://fonts.cdnfonts.com/css/horror-type" rel="stylesheet">


    </head>
    <body>



<center>
  <h1 class="horror-text">Write</h1>
</center>

<center>



		<form action="submit.php" method="post">

		

<label>title</label></br>
		<input name="title" />


</br></br>

  <label>Genre</label>

<select name="genre">
<option value="urbanlegends">urban legends</option>
<option value="haunted">haunted</option>
<option value="creatures">creatures</option>
<option value="realstory">real story</option>
<option value="murder">murder</option>
<option value="crime">crime</option>
<option value="scifi">scifi</option>
<option value="fantasy">fantasy</option>
<option value="mystery">mystery</option>



</select>











</br></br>
<label>Story</label></br>

<textarea style="height:200px; width:300px;

" name="stories">
</textarea>

		<br/></br>
			<input type="submit" value="Submit">
	</form>

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








        <script src="" async defer></script>
    </body>
</html>

