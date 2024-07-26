<?php
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'connect');

// Check the connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the database
$query = "INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message')";
$result = $db->query($query);

if ($result) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $db->error;
}

// Close the database connection
$db->close();
?>
