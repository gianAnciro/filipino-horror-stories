

<?php 
  session_start(); 

 
?>





<?php
$servername = "localhost";
$username = "id19674926_gian";
$password = "6&HYw-(d<](ll7m!";
$dbname = "id19674926_test";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


        $announcement = $_REQUEST['announcement'];
       

        $sql = "INSERT INTO `announcement`(`date` , `announcement`)  VALUES (NOW(),
            '$announcement')";




if ($conn->query($sql) === TRUE) {

$message = "finish";
echo "<script type='text/javascript'>alert('$message');</script>";
    header("location:write.php"); 
    exit;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
