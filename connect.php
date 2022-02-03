<?php
// Connection to database details
$hostname = "xxx";
$un = "xxx";
$pw = "xxx";
$db_name = "xxx";
$port = "xxx";
// Connect to mySQL
$connect = new mysqli($hostname, $un, $pw, $db_name);
// Check connection
if ($connect->connect_error){
  die("Connection to database failed: " . $connect->connect_error . "<br />");
}
 ?>
