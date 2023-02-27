<?php

$host = "localhost";
$userName = "root";
$password = "";
$dbName = "student_db";


$con = mysqli_connect($host, $userName, $password, $dbName);

if(!$con) {
  die("Connection Failed" . mysqli_connect_error());
} 
// else {
//   die("Connection Progress -- Database Connected");
// }


?>