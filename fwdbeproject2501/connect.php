<?php
$servername = "localhost";
$username = "root";
$pwd = "";
$db = "beproject";

$conn = mysqli_connect("$servername","$username","$pwd","$db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
?>