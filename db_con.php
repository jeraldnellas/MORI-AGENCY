<?php

$name = "localhost";
$server = "root";
$pass = "";
$dbname = "job_post";

$con = mysqli_connect($name, $server, $pass, $dbname);

if(!$con){
    mysqli_connect_error();
}else{
    echo "connected!";
}

?>