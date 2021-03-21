<!DOCTYPE html>
<html>
<?php
if(isset($_POST["view"])){
    include "../functions/DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $query = "SELECT * FROM round1 WHERE kid = '$kid'";
    if($result = $con->query($query)){
        if($row = $result->fetch_assoc()){
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
        <a href="index.php" class="navbar-brand">
            <img src="../images/logo.png" height="50" alt="Robotics">
        </a>
        <h2 class = "text-white" style = "margin-left:400px">DECRYPTIT - ADMIN CONSOLE</h2>
        <a class="btn btn-success" href="index.php" style = "margin-left:450px">Go Back</a>
</nav>
<br>
<div class="text-center"><strong><h2><?php echo $row['kid']; ?>'s Response</h2></strong></div>
<p id="result"></p>
<div class = "container">
    <p class = "text-white bg-dark">1. Write a program for error correction in digital communication</p><br>
    <pre><?php echo $row['answer1'];?></pre><br>
    <p class = "text-white bg-dark">2. Write a program to exchange all odd bits with even bits.(Note: input must be binary)</p><br>
    <pre><?php echo $row['answer2'];?></pre><br>
    <div class = "text-white bg-dark">3. Write a program to print
            <div style="margin-left:50%">*</div>
            <div style="margin-left:49%">* A *</div>
            <div style="margin-left:48%">* A * B *</div>
            <div style="margin-left:47%">* A * B * C *</div>
        </div><br>
    <pre><?php echo $row['answer3'];?></pre><br>
    <div class = "text-white bg-dark">4. Take any two numbers for ex: 18 12
        <table>
          <tr>
            <td>18</td>
            <td>12</td>
          </tr>
          <tr>
            <td>6</td>
            <td>12</td>
          </tr>
          <tr>
            <td>12</td>
            <td>6</td>
          </tr>
          <tr>
            <td>6</td>
            <td>6</td>
          </tr>
          <tr>
            <td>0</td>
            <td>6</td>
          </tr>
        </table>
          take input from user and implement the opeation done above ,display only the final result.
        </div><br>
    <pre><?php echo $row['answer4'];?></pre><br>
    <p class = "text-white bg-dark">5. 91% of the girls aged 10-18 years have experienced all types of harasement.Studies show that due to social expression and fear of retaliation the reported number is far leass than the real number.</p><br>
    <pre><?php echo $row['answer5'];?></pre><br>
    <p class = "text-white bg-dark">6. Our teams are over run with emergencies and urgent requests.This means we have no time to innovate or to get the best from staff.If this continues, our competion will push us out of the market.</p><br>
    <pre><?php echo $row['answer6'];?></pre><br>
    <p class = "text-white bg-dark">7. The boarding protocols used by XYZ airlines should aim to get each flights passengers aboard the plane quickly and efficiently so that the plane can take off as soon as possible.</p><br>
    <pre><?php echo $row['answer7'];?></pre><br>
    <p class = "text-white bg-dark">8. All smart devices,uses our passwords,voice,touch ID etc and all of them are synced.How can we improve the security of data shared.</p><br>
    <pre><?php echo $row['answer8'];?></pre><br>
    <p class = "text-white bg-dark">9. Overfill has been a serious problem facing our city waste facilities for the last decade.By some estimations,our city dumps are an average,30% above capacity in unsanitary,unsafe & unwise position for our city to be in.</p><br>
    <pre><?php echo $row['answer9'];?></pre><br>
    <p class = "text-white bg-success">Total score</p><br>
    <form action = "process.php" method = "post">
    <input type = "number" name = "score" id = "score" value="<?php echo $row['totscore']; ?>" required><br><br>
    <input type = "hidden" name = "kid" id = "kid" value = "<?php echo $kid?>">
    <p class = "text-white bg-info">Selected</p><br>
    <label class="container">Yes
        <input type="radio" name="selected" id= "selected" value="1" required <?php if($row['selected']==1)
            echo "checked"?>>
        <p class="checkmark"></p>
    </label>
    <label class="container">No
        <input type="radio" name="selected" id= "selected" value="0" required <?php if($row['selected']==0)
            echo "checked"?>>
        <p class="checkmark"></p>
    </label>
    <input type="submit" class="btn btn-dark" name = "submit" value = "Save changes">
    <br><br><br>
    </form>
</div>
    <?php
}else{
        echo '<script>alert("Not Yet Attempted");';
        echo "window.location.href = 'index.php';</script>";
    }
    }else{
        echo $con->error;
    }
}
else{
    echo '<script>alert("Accessed denied");';
   echo "window.location.href = 'log_admin.php';</script>";
}
?>

<script>
$(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();

        var formValues= $(this).serialize();
        console.log(formValues);

        $.post("process.php", formValues, function(data){
            alert(data);
            if(data==='Score updated'){
                window.location.href='index.php';
            }
        });
    });
});
</script>
</body>
</html>