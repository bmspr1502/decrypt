<?php
if(isset($_POST['submit'])){
    include "../functions/DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $score = $con->real_escape_string($_POST['score']);
    $selected = $con->real_escape_string($_POST['selected']);
    $query1 = "UPDATE round1 SET totscore = $score WHERE kid = '$kid';";
    $query2 = "UPDATE round1 SET selected = $selected WHERE kid = '$kid';";
    if($con->query($query1) && $con->query($query2)){
        echo "Score updated";
    }else{
        echo $con->error;
    }
}
else{
    else{
        echo '<script>alert("Accessed denied");';
        echo "window.location.href = 'log_admin.php';</script>";
    }
}
?>