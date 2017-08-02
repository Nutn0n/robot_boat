<?php

/*  Insert SQL database location */
$host = "localhost";
/* Insert database user */
$user = "pajara_peeranat";
/* Insert database password */
$pass = "prn2543";
/* Insert database name */
$db = "pajara_peeranat";
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
