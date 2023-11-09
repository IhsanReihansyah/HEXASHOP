<?php
$hostName = "localhost";    // LOCALHOST
$userName = "root";         // username database
$password = "";             // blank
$dbName   = "eduwork_kasus"; // nama database
$conn = new mysqli($hostName, $userName, $password,$dbName);    // Session Connection
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connection successful";
}


?>