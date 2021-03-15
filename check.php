<?php
include('DB.php');
$kid= $_POST['kid'];
$password=$_POST['password'];
$kid = stripcslashes($kid);
$password = stripcslashes($password);
$kid=mysqli_real_escape_string($con, $kid);
$password = mysqli_real_escape_string($con,$password);
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

}
?>
