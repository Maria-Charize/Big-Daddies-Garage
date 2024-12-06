<?php
// Database configuration
$host = 'localhost'; 
$db_name = 'bdg_base';
$username = 'maria'; 
$password = '1234567890'; 

// Create a database connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$service_date = $_POST['service_date'];
$special_request = $_POST['special_request'];

// Sanitize input to prevent SQL injection
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$service = $conn->real_escape_string($service);
$service_date = $conn->real_escape_string($service_date);
$special_request = $conn->real_escape_string($special_request);

// Insert data into the database
$sql = "INSERT INTO bookings (name, email, service, service_date, special_request) 
        VALUES ('$name', '$email', '$service', '$service_date', '$special_request')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
