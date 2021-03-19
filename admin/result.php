<!DOCTYPE html>
<html>
    <?php
if(isset($_POST["view"]))
{
    include "connection.php";
    $kid = $_POST['kid'];
    $query = "SELECT * FROM round1 WHERE kid = '$kid'";
    $result = mysqli_query($con,$query);
    if($row = mysqli_fetch_assoc($result)){
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
            <span class="nav-item text-white">DECRYPTIT</button>
            </div>
        </div>
</nav>
<br>

<div class = "container">
    <span class = "text-white bg-dark">Answer1</span><br>
    <pre><?php echo $row['answer1'];?></pre><br>
    <span class = "text-white bg-dark">Answer2</span><br>
    <pre><?php echo $row['answer2'];?></pre><br>
    <span class = "text-white bg-dark">Answer3</span><br>
    <pre><?php echo $row['answer3'];?></pre><br>
    <span class = "text-white bg-dark">Answer4</span><br>
    <pre><?php echo $row['answer4'];?></pre><br>
    <span class = "text-white bg-dark">Answer5</span><br>
    <pre><?php echo $row['answer5'];?></pre><br>
    <span class = "text-white bg-dark">Answer6</span><br>
    <pre><?php echo $row['answer6'];?></pre><br>
    <span class = "text-white bg-dark">Answer7</span><br>
    <pre><?php echo $row['answer7'];?></pre><br>
    <span class = "text-white bg-dark">Answer8</span><br>
    <pre><?php echo $row['answer8'];?></pre><br>
    <span class = "text-white bg-dark">Answer9</span><br>
    <pre><?php echo $row['answer9'];?></pre><br>
    <span class = "text-white bg-dark">Total score</span><br>
    <input type = "text" name = "score">
    <button type="submit" class="btn btn-success" name = "view">Save score</button><br>
    <span class = "text-white bg-dark">Selected</span><br>
    <button type="submit" class="btn btn-danger" name = "view">Selected</button>
</div>
    <?php
}
}
else{
    echo '<script>alert("Accessed denied");';
   echo "window.location.href = 'log_admin.php';</script>";
}
?>