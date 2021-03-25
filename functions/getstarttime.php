<?php
if(isset($_POST['kid'])) {
    include "DB.php";
    $kid = $con->real_escape_string($_POST['kid']);
    $query = "SELECT start FROM userdata WHERE kid = '$kid'";
    if ($result = $con->query($query)) {
        $row = $result->fetch_assoc();
        echo $row['start'];
    } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}