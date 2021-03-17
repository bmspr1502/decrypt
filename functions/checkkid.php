<?php
if(isset($_POST['kid'])){
    include "DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $query = "SELECT * FROM round1 WHERE kid='$kid'";
    if($result = $con->query($query)){
        if($result->num_rows==1){
            echo "EXIST";
        }else {
            $insert = "INSERT INTO round1(kid) values ('$kid');";
            if($con->query($insert)){
                echo "INSERT";
            }else{
                echo $con->error;
            }
        }
    }else{
        echo $con->error;
    }
}else {
    echo "NOT VIEWABLE";
}