<?php
/*
$host = "localhost";
$user = "u672681888_root";
$password = "3d#MobyE";
$database = "u672681888_decryptit";
*/

$host = "localhost";
$user = "root";
$password = "";
$database = "decrypit";

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}
