<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include('functions/DB.php');
  $kid= $con->real_escape_string($_POST['kid']);
  $name = $con->real_escape_string($_POST['name']);
  $email = $con->real_escape_string($_POST['email']);
  $phone = $con->real_escape_string($_POST['phone']);
  $password = $con->real_escape_string($_POST['password']);

  $kid = stripcslashes($kid);
  $name = stripcslashes($name);
  $email = stripcslashes($email);
  $phone = stripcslashes($phone);
  $password = stripcslashes($password);

  $sql2 = "SELECT * FROM entry_check WHERE kid = '$kid' AND pass = '$password'";
  $result2 = $con->query($sql2);
  $num = $result2->num_rows;
  if($num == 1){
    $sql1= "SELECT kid,start FROM userdata WHERE kid='$kid'";
    $result= $con->query($sql1);
    $count = $result->num_rows;
    if($count == 1){
      $row = $result->fetch_assoc();
      $_SESSION["kid"] = $kid;
      $_SESSION["phone"] = $phone;
      $_SESSION['start'] = $row['start'];
      echo "<script>window.location.href='round2.php'</script>";
    }
    else {

      $sql = "INSERT INTO userdata (kid, name, email, phone, start, endtime) VALUES ('$kid', '$name', '$email', '$phone', CONVERT_TZ(CURRENT_TIMESTAMP(), '+00:00', '+05:30'), CONVERT_TZ(CURRENT_TIMESTAMP(), '+00:00', '+05:30'))";
      if($con->query($sql))
      {
        echo "New user inserted";
        
        $qr = "SELECT start FROM userdata WHERE kid = '$kid'";
        if($result = $con->query($qr)){
          $row = $result->fetch_assoc();
          $_SESSION["kid"] = $kid;
          $_SESSION["phone"] = $phone;
          $_SESSION['start'] = $row['start'];
          echo "<script>window.location.href='round2.php'</script>";
        }else{
          echo "Error: " . $sql . "<br>" . $con->error;
        }

      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
  }
  else{
    echo '<script>alert("Invalid K!ID/Password or Not eligible for this round");</script>';
    echo "<script>window.location.href='index.php'</script>";
  }
}
  else{
    echo "<script>window.location.href='index.php'</script>";
  }


?>
