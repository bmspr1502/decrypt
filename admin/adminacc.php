<?php
session_start();
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = stripcslashes($_POST["username"]);
    $password = stripcslashes($_POST["password"]);
    if($username == "admin" AND $password == "decrypt123")
    {
      $_SESSION['admin']=true;

      echo "<script>window.location.href='adminconsole.php'</script>";
    }
    else {
      echo "Invalid username or password";
    }
  }
?>
