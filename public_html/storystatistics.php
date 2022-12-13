 <?php  
 $connect = mysqli_connect("localhost", "id19674926_gian", "6&HYw-(d<](ll7m!", "id19674926_test");  




$title = $_GET['title']; 


 $query = "SELECT gender, count(*) as number FROM notification where title = '$title' GROUP BY gender  ";  

 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
        <link rel="stylesheet" href="styles.css">

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Likers', 
                      
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

      </head>  
      <body>  

        <center>
           <br /><br />  
           <div style="width:900px; ">  
                <h3 align="center">Analytics for </h3>  
                <?php
echo $title;
?>

                <br />    <br />  
                <div id="piechart" style="width: 500px; height: 500px; background-color: #E4D8B4; "></div>  
           </div>  
         </center>















































  <?php  
 $connect = mysqli_connect("localhost", "id19674926_gian", "6&HYw-(d<](ll7m!", "id19674926_test");  

$title = $_GET['title']; 


 $query = "SELECT age, count(*) as number FROM notification where title = '$title' GROUP BY age  ";  

 $result = mysqli_query($connect, $query);  
 ?>  
 
        <link rel="stylesheet" href="styles.css">

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['age', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["age"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'age of Likers',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('agechart'));  
                chart.draw(data, options);  
           }  
           </script>  


        <center>
           <br /><br />  
           <div style="width:900px; ">  
                <br />  
                <div id="agechart" style="width: 500px; height: 500px; background-color: #E4D8B4; "></div>  
           </div>  
         </center>











  <?php  
 $connect = mysqli_connect("localhost", "id19674926_gian", "6&HYw-(d<](ll7m!", "id19674926_test");  

$title = $_GET['title']; 


 $query = "SELECT location, count(*) as number FROM notification where title = '$title' GROUP BY location  ";  

 $result = mysqli_query($connect, $query);  
 ?>  
 
        <link rel="stylesheet" href="styles.css">

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['location', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["location"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'location of likers',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('lochart'));  
                chart.draw(data, options);  
           }  
           </script>  


        <center>
           <br /><br />  
           <div style="width:900px; ">  
                <br />  
                <div id="lochart" style="width: 500px; height: 500px; background-color: #E4D8B4; "></div>  
           </div>  
         </center>




















      </body>  
 </html>  