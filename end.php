<?php
  session_start();
  if(isset($_POST['kid'])) {
    include('functions/DB.php');
    $kid = $_POST["kid"];
    $sql2 = "UPDATE userdata SET endtime = CONVERT_TZ(CURRENT_TIMESTAMP(), '+00:00', '+05:30'), round1=1 WHERE kid = '$kid'";
    if ($con->query($sql2)) {
      unset($_SESSION['kid']);
      unset($_SESSION['phone']);
      unset($_SESSION['start']);
      echo "Done";
    } else {
      echo $con->error;
    }
  }else{
    echo "<script>window.location.href='index.php';</script>";
  }
?>
