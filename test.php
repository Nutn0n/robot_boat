<?php

$host = "localhost";
$user = "robot";
$pass = "Sudarat";
$db = "robot_boat";
mysql_connect($host, $user, $pass) or die("Could not connect to database");
mysql_select_db($db) or die("Could not connect to database");
mysql_query("SET NAMES utf8");

$ddate = date('Y-m-d h:i:s');
$pH = ($_POST['pH']);
$DO = ($_POST['DO']);
$Tur = ($_POST['pH']);
$latitude = ($_POST['DO']);
$longitude = ($_POST['pH']);
$xl= ($_POST['pH']);
$yl = ($_POST['DO']);



$sql = "INSERT INTO boat VALUES ( $pH , $DO, $Tur,$latitude,$longitude,$xl,$yl,'$ddate' )";
$result=mysql_query($sql);


echo" $pH";


?>
