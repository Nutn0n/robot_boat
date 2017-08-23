<?php
include("connect.php");
//ส่งกลับไป
$sql    = "SELECT * FROM boat_final WHERE no='1'";
$result = mysqli_query($con,$sql);
$row    = mysqli_fetch_assoc($result);

?>





<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Boat Data</title>
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   </head>
   <body>
      <div class="wrapper">
         <h1>Status</h1>
         <section class="module maps">
            <div class="module-title">
               <h1>Maps</h1>
            </div>
            <div class="module-maps">
               <div id="map_canvas" style="width:350px; height:350px"></div>
            </div>
         </section>
         <section class="module nav">
            <div class="module-title">
               <h1>Navigation</h1>
               <p>Latitude : <?php echo $row['latitude']; ?>
                  <br/>Longitude  : <?php echo $row['longitude']; ?>
               </p>
               <p>
               <div id="latlong">
                  <input class="location-input" size="20" type="text" id="latbox" name="lat" ></p>
                  <input class="location-input" size="20" type="text" id="lngbox" name="lng" ></p>
               </div>
               <p>
               <p>
                  <button onclick="sendLocation()" class="init-button"><span class="ion-navigate"></span> Initiate</button>
               </p>
            </div>
         </section>
         <section class="module video">
            <iframe width="350" height="350" style="position:absolute; margin-left:-175px;" src="https://www.youtube.com/embed/XbVFvllQPzg?&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
         </section>
         <section class="module ph">
            <div class="module-title">
               <h1>pH</h1>
            </div>
            <div class="module-graph">
              <canvas id="myChartPH" style="height: 270px; width: 350px;background-color:#141414;"></canvas>
            </div>

         </section>
         <section class="module do">
            <div class="module-title">
               <h1>Oxygen</h1>
            </div>
            <div class="module-graph">
               <canvas id="myChartOxygen" style="height: 270px; width: 350px;background-color:#141414;"></canvas>
            </div>
         </section>
         <section class="module tur">
            <div class="module-title">
               <h1>Turbidity</h1>
            </div>
            <div class="module-graph">
               <canvas id="myChartTUR" style="height: 270px; width: 350px;background-color:#141414;"></canvas>
            </div>
         </section>
         <section class="module warn">
            <div class="module-title-module">
               <h1>Warning</h1>
            </div>
            <div class="overflow-wrapper">
               <div class="module-scroll">
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
                  <p class="warn-topic">111222 333333 <strong>time</strong></p>
               </div>
            </div>
         </section>
         <section class="module video">
            <iframe style="position:absolute; margin-left:-175px;" width="350" height="350" src="https://www.youtube.com/embed/4zZnvenYbFU?&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
         </section>
         <section class="module ctrl">
            <div class="module-title">
               <h1>Move</h1>
            </div>
            <nav class="control">
               <ul>
                  <li><a onmousedown="goFoward()" onmouseup="resetVariable()">▲</a></li>
                  <!--  w --->
                  <li><a onmousedown="goRight()" onmouseup="resetVariable()">▲</a></li>
                  <!--  d --->
                  <li><a onmousedown="goLeft()" onmouseup="resetVariable()">▲</a></li>
                  <!--  a --->
                  <li><a onmousedown="goBackward()" onmouseup="resetVariable()">▲</a></li>
                  <!--  s --->
               </ul>
               <a class="confirm" onmousedown="ok()" onmouseup="resetVariable()">OK</a>
            </nav>
            <div class="status-button">
               <a onclick="start()">ON</a>  <a onclick="stop()">OFF</a>
            </div>
         </section>
      </div>
      <cfoutput>
         <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=#YOUR-GOOGLE-API-KEY#&sensor=false"></script>
      </cfoutput>
      <script src="script.js"></script>
   </body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<script>
var ctx = document.getElementById("myChartPH");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["11:12", "11:13", "11:14", "11:15", "11:16", "11:17"],
        datasets: [{
            label: 'PH',
            data: [6, 2, 7, 2, 4, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
 </script>

 <script>
 var ctx = document.getElementById("myChartOxygen");
 var myChart = new Chart(ctx, {
     type: 'line',
     data: {
         labels: ["11:12", "11:13", "11:14", "11:15", "11:16", "11:17"],
         datasets: [{
             label: 'Oxygen',
             data: [20, 2, 7, 2, 4, 3],
             backgroundColor: [
                 'rgba(255, 99, 132, 0.2)',
                 'rgba(54, 162, 235, 0.2)',
                 'rgba(255, 206, 86, 0.2)',
                 'rgba(75, 192, 192, 0.2)',
                 'rgba(153, 102, 255, 0.2)',
                 'rgba(255, 159, 64, 0.2)'
             ],
             borderColor: [
                 'rgba(255,99,132,1)',
                 'rgba(54, 162, 235, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(75, 192, 192, 1)',
                 'rgba(153, 102, 255, 1)',
                 'rgba(255, 159, 64, 1)'
             ],
             borderWidth: 1
         }]
     },
     options: {
         scales: {
             yAxes: [{
                 ticks: {
                     beginAtZero: true
                 }
             }]
         }
     }
 });
  </script>

  <script>
  var ctx = document.getElementById("myChartTUR");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["11:12", "11:13", "11:14", "11:15", "11:16", "11:17"],
          datasets: [{
              label: 'Turbidity',
              data: [100, 2, 7, 2, 4, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
   </script>
