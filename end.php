<?php
  session_start();
  $kid = $_SESSION["kid"];
  $sql2 = "INSERT INTO userdata(end) VALUES(CURRENT_TIMESTAMP()) WHERE kid='$kid'";
?>
