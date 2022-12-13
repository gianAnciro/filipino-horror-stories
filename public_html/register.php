<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>




<center>
  <h1 class="horror-text">Register</h1>






	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	  <label>Username</label>
  	  <input type="text" name="username">
</br></br>


<label for="gender">Gender:</label>

<select name="gender" id="gender">
  <option value="M">M</option>
  <option value="F">F</option>
</select>

<label for="age">Age:</age>

      
<input style="width:70px;"  type="number" min="1" max="100" value="18" name = "age">

</br></br>


      <label>Location</label>

<select name="location">
<option value="Abra">Abra</option>
<option value="Agusan del Norte">Agusan del Norte</option>
<option value="Agusan del Sur">Agusan del Sur</option>
<option value="Aklan">Aklan</option>
<option value="Albay">Albay</option>
<option value="Angeles City">Angeles City</option>
<option value="Antique">Antique</option>
<option value="Apayao">Apayao</option>
<option value="Aurora">Aurora</option>
<option value="Basilan">Basilan</option>
<option value="Bataan">Bataan</option>
<option value="Batanes">Batanes</option>
<option value="Batangas">Batangas</option>
<option value="Biliran">Biliran</option>
<option value="Benguet">Benguet</option>
<option value="Bohol">Bohol</option>
<option value="Bukidnon">Bukidnon</option>
<option value="Bulacan">Bulacan</option>
<option value="Cagayan">Cagayan</option>
<option value="Camarines Norte">Camarines Norte</option>
<option value="Camarines Sur">Camarines Sur</option>
<option value="Camiguin">Camiguin</option>
<option value="Capiz">Capiz</option>
<option value="Catanduanes">Catanduanes</option>
<option value="Cavite">Cavite</option>
<option value="Cebu">Cebu</option>
<option value="Compostela">Compostela</option>
<option value="Davao del Norte">Davao del Norte</option>
<option value="Davao del Sur">Davao del Sur</option>
<option value="Davao Oriental">Davao Oriental</option>
<option value="Eastern Samar">Eastern Samar</option>
<option value="Guimaras">Guimaras</option>
<option value="Ifugao">Ifugao</option>
<option value="Ilocos Norte">Ilocos Norte</option>
<option value="Ilocos Sur">Ilocos Sur</option>
<option value="Iloilo">Iloilo</option>
<option value="Isabela">Isabela</option>
<option value="Kalinga">Kalinga</option>
<option value="Laguna">Laguna</option>
<option value="Lanao del Norte">Lanao del Norte</option>
<option value="Lanao del Sur">Lanao del Sur</option>
<option value="La Union">La Union</option>
<option value="Leyte">Leyte</option>
<option value="Maguindanao">Maguindanao</option>
<option value="Marinduque">Marinduque</option>
<option value="Masbate">Masbate</option>
<option value="Metro Manila">Metro Manila</option>
<option value="Mindoro Occidental">Mindoro Occidental</option>
<option value="Mindoro Oriental">Mindoro Oriental</option>
<option value="Misamis Occidental">Misamis Occidental</option>
<option value="Misamis Oriental">Misamis Oriental</option>
<option value="Mountain Province">Mountain Province</option>
<option value="Negros Occidental">Negros Occidental</option>
<option value="Negros Oriental">Negros Oriental</option>
<option value="North Cotabato">North Cotabato</option>
<option value="Northern Samar">Northern Samar</option>
<option value="Nueva Ecija">Nueva Ecija</option>
<option value="Nueva Vizcaya">Nueva Vizcaya</option>
<option value="Palawan">Palawan</option>
<option value="Pampanga">Pampanga</option>
<option value="Pangasinan">Pangasinan</option>
<option value="Quezon">Quezon</option>
<option value="Quirino">Quirino</option>
<option value="Rizal">Rizal</option>
<option value="Romblon">Romblon</option>
<option value="Samar">Samar</option>
<option value="Sarangani">Sarangani</option>
<option value="Siquijor">Siquijor</option>
<option value="Sorsogon">Sorsogon</option>
<option value="South Cotabato">South Cotabato</option>
<option value="Southern Leyte">Southern Leyte</option>
<option value="Sultan Kudarat">Sultan Kudarat</option>
<option value="Sulu">Sulu</option>
<option value="Surigao del Norte">Surigao del Norte</option>
<option value="Surigao del Sur">Surigao del Sur</option>
<option value="Tarlac">Tarlac</option>
<option value="Tawi-Tawi">Tawi-Tawi</option>
<option value="Valuenzela">Valuenzela</option>
<option value="Zambales">Zambales</option>
<option value="Zamboanga del Norte">Zamboanga del Norte</option>
<option value="Zamboanga del Sur">Zamboanga del Sur</option>
<option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
</select>














































</br>
</br>

  	  <label>Email</label>
  	  <input type="email" name="email" >
</br></br>

  	  <label>Password</label>
  	  <input type="password" name="password_1">
</br></br>


  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
</br></br>

  	  <button type="submit" class="btn" name="reg_user">Register</button>
</br></br>
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
  </form>


</center>

</body>
</html>
