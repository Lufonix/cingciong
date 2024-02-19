<?php
$host="localhost";
$username="root";
$password="";
$db="cingciong";
$con = mysqli_connect($host, $username, $password, $db);
if(!$con){
    die("Connection Failed!");
}
?>