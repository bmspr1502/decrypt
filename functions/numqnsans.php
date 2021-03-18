<?php
if(isset($_POST['kid'])) {
    include "DB.php";
    $kid = $_POST['kid'];
    $length = array();
    $query = "SELECT * FROM round1 WHERE kid='$kid'";
    if($result = $con->query($query)){
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
            $length[0] = strlen($row['kid']);
            $length[1] = strlen($row['answer1']);
            $length[2] = strlen($row['answer2']);
            $length[3] = strlen($row['answer3']);
            $length[4] = strlen($row['answer4']);
            $length[5] = strlen($row['answer5']);
            $length[6] = strlen($row['answer6']);
            $length[7] = strlen($row['answer7']);
            $length[8] = strlen($row['answer8']);
            $length[9] = strlen($row['answer9']);

            $answered = 0;
            for ($i = 1; $i <= 9; $i++) {
                if ($length[$i] > 0)
                    $answered++;
            }
            echo $answered;
        }else{
            echo "NO ELEMENTS FOUND";
        }

    }else{
        echo $con->error;
    }
}
