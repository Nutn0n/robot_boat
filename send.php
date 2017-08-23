<?php
  include("connect.php");

  //ส่งกลับไป
  $sql    = "SELECT `forward`,`backward`,`right`,`left`,`OK`,`on`,`off` FROM boat_final WHERE no='1'";
  $result = mysqli_query($con,$sql);
  $row    = mysqli_fetch_assoc($result);
  echo json_encode($row);
?>
