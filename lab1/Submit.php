<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bookhaven"; 
 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
$email = $_POST['email']; 
$password = $_POST['password']; 
 
$sql = "INSERT INTO signin (email, password) VALUES ('$email', '$password')"; 
 
if ($conn->query($sql) === TRUE) { 
    echo "Logged in"; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 
 
$conn->close(); 
?> 
