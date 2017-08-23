<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "robot_boat";

@mysql_connect($host, $user, $pass) or die("Could not connect to database");
@mysql_select_db($db) or die("Could not connect to database");
@mysql_query("SET NAMES utf8");

//ส่งกลับไป
$sql    = "SELECT * FROM boat_final WHERE no='1'";
$result = mysql_query($sql);
$row    = mysql_fetch_assoc($result);

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
            <iframe width="350" height="350" style="position:absolute; margin-left:-175px;" src="https://www.youtube.com/embed/u2AitrqGybs" frameborder="0" allowfullscreen></iframe>
         </section>
         <section class="module ph">
            <div class="module-title">
               <h1>pH</h1>
            </div>
            <div class="module-graph">
               <svg viewBox="0 0 500 100" class="chart">
                  <polyline     fill="none"     stroke="#fff"     stroke-width="2"     points="       00,50       20,50       40,50       60,50       80,50       100,50       120,50       140,50       160,50       180,50       200, 50       220, 50       240, 50       260, 50       280, 50       300, 50       320, 50       340, 50"   />
               </svg>
            </div>
         </section>
         <section class="module do">
            <div class="module-title">
               <h1>Oxygen</h1>
            </div>
            <div class="module-graph">
               <svg viewBox="0 0 500 100" class="chart">
                  <polyline     fill="none"     stroke="#fff"     stroke-width="2"     points="       00,50       20,50       40,50       60,50       80,50       100,50       120,50       140,50       160,50       180,50       200, 50       220, 50       240, 50       260, 50       280, 50       300, 50       320, 50       340, 50"   />
               </svg>
            </div>
         </section>
         <section class="module tur">
            <div class="module-title">
               <h1>Turbidity</h1>
            </div>
            <div class="module-graph">
               <svg viewBox="0 0 500 100" class="chart">
                  <polyline     fill="none"     stroke="#fff"     stroke-width="2"     points="       00,50       20,50       40,50       60,50       80,50       100,50       120,50       140,50       160,50       180,50       200, 50       220, 50       240, 50       260, 50       280, 50       300, 50       320, 50       340, 50"   />
               </svg>
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
            <iframe style="position:absolute; margin-left:-175px;" width="350" height="350" src="https://www.youtube.com/embed/apfXcSN777E?autoplay=1" frameborder="0" allowfullscreen></iframe>
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
