<?php
$host = 'localhost';
$db   = 'user_login';
$user = 'root'; 
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully to the database.<br>";
}



?>