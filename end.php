<?php
  session_start();
  include('functions/DB.php');
  //echo "hell0";
  $kid = $_SESSION["kid"];
  //$sql2 = "INSERT INTO userdata(end) VALUES(CURRENT_TIMESTAMP()) WHERE kid='$kid'";
  $sql2 = "UPDATE userdata SET endtime = CURRENT_TIMESTAMP() WHERE kid = '$kid'";
  mysqli_query($con, $sql2);
?>
