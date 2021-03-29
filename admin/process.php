<?php
if(isset($_POST['kid'])){
    include "../functions/DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $score = $con->real_escape_string($_POST['score']);
    $score = number_format($score);
    $selected = $con->real_escape_string($_POST['selected']);
    $query1 = "UPDATE round1 SET totscore = $score, selected = $selected WHERE kid = '$kid';";
    if($con->query($query1)){
        echo "Score updated";
    }else{
        echo $con->error;
    }
}
else{
    echo '<script>alert("Accessed denied");</script>';
}
?>