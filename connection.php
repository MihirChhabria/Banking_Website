<?php
$servername = "localhost";
$username = "Mihir_Chhabria";
$password = "@A6dYv4GNkYkjk8";
$dbname = "sbank";


//create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

//check connection 
if ($conn->connect_error) {
    die("Connection failed due to: " . $conn->connect_error);
  }
  
?>