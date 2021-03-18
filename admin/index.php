<!DOCTYPE html>
<html>
    <?php
    include "connection.php";
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
  <table class="table table-dark table-striped">
  <thead>
  <br>
    <tr>
    <th>NO</th>
    <th>K ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Start time</th>
      <th>End time</th>
      <th>Time elapsed</th>
      <th>Answer1</th>
      <th>Answer2</th>
      <th>Answer3</th>
      <th>Answer4</th>
      <th>Answer5</th>
      <th>Answer6</th>
      <th>Answer7</th>
      <th>Answer8</th>
      <th>Answer9</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
    while($row1 = mysqli_fetch_assoc($result1)){
    ?>
    <tr>
    <td><?php echo $i;?></td>
      <td><?php echo $row1['kid'];?></td>
      <td><?php echo $row1['name'];?></td>
      <td><?php echo $row1['email'];?></td>
      <td><?php echo $row1['phone'];?></td>
      <td><?php echo $row1['start'];?></td>
      <td><?php echo $row1['endtime'];?></td>
      <?php
        $dteStart = new DateTime($row1['start']);
        $dteEnd   = new DateTime($row1['endtime']);
        $dteDiff  = $dteStart->diff($dteEnd);?>
      <td><?php echo $dteDiff->format("%H:%I:%S");?></td>
      <?php if($row2 = mysqli_fetch_assoc($result2)){?>
      <td><?php echo $row2['answer1'];?></td>
      <td><?php echo $row2['answer2'];?></td>
      <td><?php echo $row2['answer3'];?></td>
      <td><?php echo $row2['answer4'];?></td>
      <td><?php echo $row2['answer5'];?></td>
      <td><?php echo $row2['answer6'];?></td>
      <td><?php echo $row2['answer7'];?></td>
      <td><?php echo $row2['answer8'];?></td>
      <td><?php echo $row2['answer9'];?></td>
      
    </tr>
    <?php
      }
    $i++;
    }
    ?>
  </tbody>
</table>
</div>