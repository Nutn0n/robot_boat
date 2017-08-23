<?php
  include("connect.php");

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
  $result = mysqli_query($con,$sql);
?>
