<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
/*
$sql = "DROP DATABASE IF EXISTS Leading_choice_gateways";
if (mysqli_query($conn, $sql)) {
    //echo "Database Droped successfully";
  } else {
    echo "Error Droping database: " . mysqli_error($conn);
  }

$sql = "CREATE DATABASE Leading_choice_gateways";
if (mysqli_query($conn, $sql)) {
 // echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
*/
mysqli_close($conn);
?>
