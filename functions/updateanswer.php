<?php
if($_POST['kid']){
    include "DB.php";
    $kid = $_POST['kid'];
    $qnid = $_POST['answerid'];
    $answer = htmlentities($con->real_escape_string($_POST['answer']));

    $query = "UPDATE round1 SET answer".$qnid. " = '$answer' WHERE kid = '$kid';";
   
    if($con->query($query)){
        echo "SUCCESS";
    }else{
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}