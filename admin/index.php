<!DOCTYPE html>
<html>
    <?php
    include "../functions/DB.php";
    $query1 = "SELECT * FROM userdata INNER JOIN round1 ON userdata.kid = round1.kid";
    if(!($result1 = $con->query($query1))){
        die($con->error);
    }

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
        <h2 class = "text-white" style = "margin-left:450px">DECRYPTIT - ADMIN CONSOLE</h2>
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
        <th>Round1 Score</th>
        <th>Selected - R2</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
    while($row = mysqli_fetch_assoc($result1)){
        //print_r($row);
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
        <td><?php if(isset($row['totscore']))echo $row['totscore'];?></td>
        <td><?php if($row['selected']){
                echo "<p class='bg-success text-white'>Selected</p>";
            }else{
                echo "<p class='bg-danger text-white'>Not Selected</p>";
            }?></td>

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