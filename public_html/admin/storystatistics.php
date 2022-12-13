 <?php  
 $connect = mysqli_connect("localhost", "id19674926_gian", "6&HYw-(d<](ll7m!", "id19674926_test");  



 $query = "SELECT genre, count(*) as number FROM stories GROUP BY genre  ";  

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
                          ['genre', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["genre"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of stories posted based on genre',  
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
                <h3 align="center">Analytics for stories </h3>  


                <br />    <br />  
                <div id="piechart" style="width: 500px; height: 500px; background-color: #E4D8B4; "></div>  
           </div>  
         </center>






      </body>  
 </html>  