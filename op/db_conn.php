<?php

$servername = "localhost";
$username = "opadmin";
$password = "Rencsi13_";
$dbname = "opdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
?>