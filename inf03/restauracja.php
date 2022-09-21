<?php

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("nie połączono z bazą: " . $conn->connect_error);
}
echo "połączono z bazą";

?>