<?php

include "connect.php";

$id = $_GET['id']; 

$del = mysqli_query($db,"delete from users where id = '$id'"); 

if($del)
{
    mysqli_close($db); 
    header("location:records.php"); 
    exit;	
}
else
{
    echo "Error deleting record";
}
?>
