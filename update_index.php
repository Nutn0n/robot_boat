<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "robot_boat";

  mysql_connect($host, $user, $pass) or die("Could not connect to database");
  mysql_select_db($db) or die("Could not connect to database");
  mysql_query("SET NAMES utf8");

  $forward   = $_POST['forward'];
  $backward  = $_POST['backward'];
  $righ      = $_POST['righ'];
  $left      = $_POST['left'];
  $ok        = $_POST['ok'];
  $on        = $_POST['on'];
  $off       = $_POST['off'];
  $lat       = $_POST['lat'];
  $long      = $_POST['long'];

  $sql    = "UPDATE boat_final SET
            `latitude_last`='$lat',
            `longitude_last`='$long',
            `forward`='$forward',
            `backward`='$backward',
            `right`='$righ',
            `left`='$left',
            `OK`='$ok',
            `on`='$on',
            `off`='$off'
             WHERE no='1'";
  $result = mysql_query($sql);
?>
