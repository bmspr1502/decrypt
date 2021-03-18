<?php
if(isset($_POST['kid'])){
    include "DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $query = "SELECT round1 FROM userdata WHERE kid='$kid'";
    if($result = $con->query($query)){
        $row = $result->fetch_assoc();
        if($row['round1']==1){
            echo "DONE";
        }else{
            echo 0;
        }
    }else{
        echo $con->error;
    }
}else {
    echo "NOT VIEWABLE";
}