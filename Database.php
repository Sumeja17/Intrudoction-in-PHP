<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";
$connect = new mysqli($server, $username, $password, $dbname);
if($connect->connect_error)
    die("Connection failed".$connect->connect_error);
else
    echo "Successfully connected with database";
$connect->close();
?>