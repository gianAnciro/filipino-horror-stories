<!DOCTYPE html>
<html>
<head>
  <title></title>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../styles.css">
</head>






















<body>
<center>
  <h1 class="horror-text">delete a user</h1>
</center>

<center>
       <div style=" height:320px; overflow:auto;">
<table border="2">
  <tr>
    <td>Username</td>
        <td>Report counts</td>
                <td>ban status</td>

        <td>Options</td>

  </tr>

<?php

include "connect.php"; 

$records = mysqli_query($db,"select * from users ORDER BY reports DESC"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>

    <td><a href="authorpage.php?username=<?php echo $data['username']; ?>"> <?php echo $data['username']; ?>  </a></td>

    <td><?php echo $data['reports']; ?>  </td>
    <td><?php echo $data['banned']; ?>  </td>


 <td><a href="delete.php?id=<?php echo $data['id']; ?>" onclick="return  confirm('do you want to delete this user?')">delete </a></td>

 <td><a href="unban.php?id=<?php echo $data['id']; ?>" onclick="return  confirm('do you want to unban this user?')">unban </a></td>

 <td><a href="ban.php?id=<?php echo $data['id']; ?>" onclick="return  confirm('do you want to ban this user?')">ban </a></td>





  </tr>	
<?php
}
?>
</table>
</div>
</center>

</body>
</html>
