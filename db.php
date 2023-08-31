<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$databaseName = "form"; // Change this to the desired database name

// Create the new database
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();

// Return the database name for later use
return $databaseName;
?>
