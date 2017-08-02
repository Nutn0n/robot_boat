<!DOCTYPE html>
<html>
<body>

<h1>Test</h1>
  
  
  
<?php

/*  Insert SQL database location */
$host = "localhost";
/* Insert database user */
$user = "robot";
/* Insert database password */
$pass = "Sudarat";
/* Insert database name */
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
<<<<<<< HEAD:index.php
$result=mysql_query($sql);

=======
$result=mysql_query($sql);
>>>>>>> master:data.php

?>

<?php
echo "Hello World!";
?>
  
  
  

</body>
</html>
