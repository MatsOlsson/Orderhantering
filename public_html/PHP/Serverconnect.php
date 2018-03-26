<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "Boy";
$password = "Mandarin1";
$database = "itpoint";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

</body>
</html>