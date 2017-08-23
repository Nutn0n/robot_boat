<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "robot_boat";

$host = "localhost";
$user = "robot_skn";
$pass = "Sudarat";
$db   = "robot_boat";


// mysql_connect($host, $user, $pass) or die("Could not connect to database");
// mysql_select_db($db) or die("Could not connect to database");
// mysql_query("SET NAMES utf8");

$con = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($con,"utf8");

?>
