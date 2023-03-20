<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$database = 'db_edusogno_esercizio';

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
echo "connected succesfully"
?>