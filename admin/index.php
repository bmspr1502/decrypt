<!DOCTYPE html>
<html>
    <?php
    include "../functions/DB.php";
    $query1 = "SELECT * FROM userdata";
    $query2 = "SELECT * FROM round1";
    $result1 = mysqli_query($con,$query1);
    $result2 = mysqli_query($con,$query2);
    ?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="#" class="navbar-brand">
            <img src="../images/logo.png" height="50" alt="Robotics">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
            <p class="nav-item text-white">DECRYPTIT</button>
            </div>
        </div>
</nav>
  <table class="table table-dark table-striped">
  <thead>
  <br>
    <tr>
    <th>S NO</th>
    <th>K ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Start time</th>
      <th>End time</th>
      <th>Time elapsed</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
    while($row = mysqli_fetch_assoc($result1)){
    ?>
    <tr>
    <td><?php echo $i;?></td>
      <td><?php echo $row['kid'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['start'];?></td>
      <td><?php echo $row['endtime'];?></td>
      <?php
        $dteStart = new DateTime($row['start']);
        $dteEnd   = new DateTime($row['endtime']);
        $dteDiff  = $dteStart->diff($dteEnd);?>
      <td><?php echo $dteDiff->format("%H:%I:%S");?></td>
      <form action = "result.php" method = "post">
        <input type = "hidden" name = "kid" value ="<?php echo $row['kid'];?>">
      <td><button type="submit" class="btn btn-warning" name = "view">View result</button></td>
    </form>
    </tr>
    <?php
    $i++;
    }
    ?>
  </tbody>
</table>
</body>
</html>