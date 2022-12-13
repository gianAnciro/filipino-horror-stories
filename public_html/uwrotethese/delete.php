<?php

include "connect.php";

$title = $_GET['title']; 

$del = mysqli_query($db,"delete from stories where title = '$title'"); 



if($del)
{
    mysqli_close($db); 
    header("location:uwrotethese.php"); 
    exit;	
}









else
{
    echo "Error deleting record";
}
?>
