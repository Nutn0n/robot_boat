<?php
  include("connect.php");

  $DDATE     = date('Y-m-d h:i:s');
  @$ESP8266   = $_GET['esp8266'];
  $decode    = json_decode($ESP8266);
  if(isset($decode->PH)){
    $PH        = $decode->PH;
    $DO        = $decode->DO;
    $TUR       = $decode->TUR;
    $LATITUDE  = $decode->LATITUDE;
    $LONGITUDE = $decode->LONGITUDE;
    $XL        = $decode->PH;
    $YL        = $decode->DO;
  }else {
    $PH        = '';
    $DO        = '';
    $TUR       = '';
    $LATITUDE  = '';
    $LONGITUDE = '';
    $XL        = '';
    $YL        = '';
  }

  $sql    = "UPDATE boat_final SET `pH`='$PH',`DO`='$DO',`Turbidity`='$TUR',`latitude_last`='$LATITUDE',`longitude_last`='$LONGITUDE',`date/time`='$DDATE' WHERE no='1'";
  $result = mysqli_query($con,$sql);

?>
