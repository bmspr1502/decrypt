<?php
session_start();
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = stripcslashes($_POST["username"]);
    $password = stripcslashes($_POST["password"]);
    if($username == "ADMINWIZARD" AND $password == "avianmaster@4321")
    {
      $_SESSION['admin']=1;
      echo "SUCCESSFUL";
      echo "<script>window.location.href='adminconsole.php'</script>";
    }
    else {
      echo "Invalid username or password";
    }
  }
?>
