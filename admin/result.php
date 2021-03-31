<?php
session_start();
if(isset($_SESSION['admin'])){
if($_SESSION['admin']==1){
?>
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
  <link rel="icon" href="../images/logo.png" type="image/icon type">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title><?php echo $row['kid']; ?>'s Response</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="index.php" class="navbar-brand">
            <img src="../images/logo.png" height="50" alt="Robotics">
        </a>
        <h2 class = "text-white" style = "margin-left:400px">DECRYPTIT - ADMIN CONSOLE</h2>

        <a class="btn btn-success" href="adminconsole.php" style = "margin-left:450px">Go Back</a>
</nav>
<br>
<div class="text-center"><strong><h2><?php echo $row['kid']; ?>'s Response</h2></strong></div>
<p id="result"></p>
<div class = "container">
  
    <p class = "text-white bg-dark p-2">
        1.Decrypt the following message 😉
<br>Fictional border ordinary boredom
<br>Elephant fox programming genre 
<br>Robotics mini enigmatic son
<br>Classy experience</p><br>
    <pre><?php echo $row['answer1'];?></pre><br>
    <p class = "text-white bg-dark p-2">2.Decrypt the following message 😊
<br>12-5-1-18-14</p><br>
    <pre><?php echo $row['answer2'];?></pre><br>
    <div class = "text-white bg-dark p-2">3.Decrypt the following message 😭
        <div><img class='img-fluid' src="../images/3rd question img.png" alt="IMAGE"></div>
    </div>
        <br>
    <pre><?php echo $row['answer3'];?></pre><br>
    <div class = "text-white bg-dark p-2">4.Decrypt the following message 😎
<br>UM UZNKXY
<br>Hint:The number of the most valuable and the least valued thing in a million
        </div><br>
    <pre><?php echo $row['answer4'];?></pre><br>
    <p class = "text-white bg-dark p-2">5.Decrypt: 67-72-2-38-92 🙄
<br>Hint:“No matter what he does, every person on earth plays a central role in the history of the world. And normally he doesn't know it.”</p><br>
    <pre><?php echo $row['answer5'];?></pre><br>
    <div class = "text-white bg-dark p-2">6.Decrypt the following message 😶
    <div><img class='img-fluid' src="../images/6th question img1.png" alt="img"></div>
        <br>key:
    <div><img class='img-fluid' src="../images/6th question img2.png" alt="img"> </div></div><br>
    <pre><?php echo $row['answer6'];?></pre><br>
    <p class = "text-white bg-dark p-2">7.>Decrypt the following message 😴
            <br>LRRENOAFM</p><br>
    <pre><?php echo $row['answer7'];?></pre><br>
    <p class = "text-white bg-dark p-2">8.Attend this question after completing all other 7 questions:
From the previously decrypted chunks of messages formulate the entire statement🙏</p><br>
    <pre><?php echo $row['answer8'];?></pre><br>
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
        echo '<script>alert("Not Yet ' . $kid .' Attempted");';
        echo "window.location.href = 'index.php';</script>";
    }
    }else{
        echo $con->error;
    }
}
else{
    echo '<script>alert("Accessed denied");';
   echo "window.location.href = 'index.php';</script>";
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
                window.location.href='adminconsole.php';
            }
        });
    });
});
</script>
</body>
</html>

    <?php
}else {
    echo '<script>alert("Accessed denied");</script>';
    header('location: index.php');
}
}else {
    echo '<script>alert("Accessed denied");</script>';
    header('location: index.php');
}
?>