<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
<link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8835322531669245"
     crossorigin="anonymous"></script>
</head>
<body>

<center>
  <h1 class="horror-text">Log In</h1>



	 
  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>

  		<label>Username</label>
  		<input type="text" name="username" >

</br></br>
  		<label>Password</label>
  		<input type="password" name="password">
</br></br>

  		<button type="submit" class="btn" name="login_user">Login</button>

  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
</br>
Go to Admin Section <a href="admin/login.php">Go to Admin</a>
  	</p>
  </form>
</center>

</body>
</html>
