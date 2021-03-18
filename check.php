<?php
session_start();
include('functions/DB.php');
$kid= $_POST['kid'];
$password=$_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$_SESSION["kid"] = $kid;
$_SESSION["phone"] = $phone;
$kid = stripcslashes($kid);
$password = stripcslashes($password);
$name = stripcslashes($name);
$email = stripcslashes($email);
$phone = stripcslashes($phone);
$kid=mysqli_real_escape_string($con, $kid);
$password = mysqli_real_escape_string($con,$password);
$name = mysqli_real_escape_string($con,$name);
$email = mysqli_real_escape_string($con,$email);
$phone = mysqli_real_escape_string($con,$phone);
/*
$sql = "SELECT * FROM userdata WHERE kid='$kid' AND password='$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count == 1)
{

  echo "<script>window.location.href = 'index.php';</script>";
}
else {
  echo '<script>alert("Login failed, Invalid K!ID or password");</script>';
  echo "<script>window.location.href = 'login.html';</script>";

}*/
$sql1= "SELECT * FROM userdata WHERE kid='$kid'";
$result= mysqli_query($con, $sql1);
$count = mysqli_num_rows($result);
if($count == 1)
{
  echo "<script>window.location.href = 'round1.php';</script>";
}
else {
  $sql = "INSERT INTO userdata (kid, name, email, phone, password,start) VALUES ('$kid', '$name', '$email', '$phone', '$password',CURRENT_TIMESTAMP())";
  echo "<script>window.location.href = 'round1.php';</script>";
  if(mysqli_query($con, $sql))
  {
    echo "New user inserted";
  }
  else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
//$sql = "INSERT INTO userdata (kid, name, email, phone, password) VALUES ('$kid', '$name', '$email', '$phone', '$password')";

?>
