<!DOCTYPE html>
<html>
<?php
if(isset($_POST["view"])){
    include "../functions/DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $query = "SELECT * FROM round1 WHERE kid = '$kid'";
    $result = $con->query($query);
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

<p id="result"></p>
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
    <form action = "process.php" method = "post">
    <input type = "number" name = "score" id = "score" value="<?php echo $row['totscore']; ?>" required><br><br>
    <input type = "hidden" name = "kid" id = "kid" value = "<?php echo $kid?>">
    <span class = "text-white bg-dark">Selected</span><br>
    <label class="container">Yes
        <input type="radio" name="selected" id= "selected" value="1" required <?php if($row['selected']==1)
            echo "checked"?>>
        <span class="checkmark"></span>
    </label>
    <label class="container">No
        <input type="radio" name="selected" id= "selected" value="0" required <?php if($row['selected']==0)
            echo "checked"?>>
        <span class="checkmark"></span>
    </label>
    <input type="submit" class="btn btn-dark" name = "submit" >
    <br><br><br>
    </form>
</div>
    <?php
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
        });
    });
});
</script>
</body>
</html>