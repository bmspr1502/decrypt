<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include('functions/DB.php');
  $kid= $con->real_escape_string($_POST['kid']);
  $name = $con->real_escape_string($_POST['name']);
  $email = $con->real_escape_string($_POST['email']);
  $phone = $con->real_escape_string($_POST['phone']);

  $kid = stripcslashes($kid);
  $name = stripcslashes($name);
  $email = stripcslashes($email);
  $phone = stripcslashes($phone);


  $sql1= "SELECT * FROM userdata WHERE kid='$kid'";
  $result= $con->query($sql1);
  $count = $result->num_rows;
  if($count == 1)
  {
    $_SESSION["kid"] = $kid;
    $_SESSION["phone"] = $phone;
    header("location: round1.php");
  }
  else {
    $sql = "INSERT INTO userdata (kid, name, email, phone, start) VALUES ('$kid', '$name', '$email', '$phone', CURRENT_TIMESTAMP())";
    if(mysqli_query($con, $sql))
    {
      echo "New user inserted";
      $_SESSION["kid"] = $kid;
      $_SESSION["phone"] = $phone;
      header("location: round1.php");
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
  }
}else{
  echo "NOT Viewable";
}

?>
