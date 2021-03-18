<?php
  session_start();
  if(isset($_POST['kid'])) {
    include('functions/DB.php');
    $kid = $_POST["kid"];
    $sql2 = "UPDATE userdata SET endtime = CURRENT_TIMESTAMP() WHERE kid = '$kid'";
    if (isset($con->query($sql2))) {
      echo "Done";
      unset($_SESSION['kid']);
      unset($_SESSION['phone']);
    } else {
      echo $con->error;
    }
  }
?>
