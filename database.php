<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "inventory";

$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($mysqli){
    echo " ";
}else{
    echo "error";
}