<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "ui";

$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn){
    echo "Not connected " .mysqli_connect_error($conn);
}else{
   // echo "connectd";
}