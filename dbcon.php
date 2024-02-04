<?php
$host = "localhost";
$userName = 'root';
$password = '';

$dbName = 'ndubb';


//connection of database
$con = mysqli_connect($host, $userName, $password, $dbName);

if(!$con){
    die('Connection Failed'.mysqli_connect_error());
}

?>