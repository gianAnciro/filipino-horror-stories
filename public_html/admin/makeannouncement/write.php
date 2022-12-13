

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles.css">

    </head>
    <body>



<center>
  <h1 class="horror-text">announcement</h1>
</center>

<center>



		<form action="submit.php" method="post">

		






<label>announcement</label></br>
<textarea  id="textsend" onkeyup="success()" style="height:200px; width:300px;" name="announcement">

</textarea>
		<br/>
      <input type="submit" id="button" disabled value="announce" style="height:30px; width:300px;" >
	</form>

</center>



















<script>
function success() {
     if(document.getElementById("textsend").value==="") { 
            document.getElementById('button').disabled = true; 
        } else { 
            document.getElementById('button').disabled = false;
        }
    }
</script>    </body>
</html>

