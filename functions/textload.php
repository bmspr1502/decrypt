<?php
if($_POST['kid']){
    include "DB.php";
    $kid = $_POST['kid'];
    $qnid = $_POST['answerid'];

    $query = "SELECT answer". $qnid. " FROM round1 WHERE kid = '$kid';";
    if($result = $con->query($query)){
        $row = $result->fetch_row();
        echo $row[0];
    }else{
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}