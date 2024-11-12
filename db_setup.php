<?php
// Connection settings
$host = "localhost";      // Server name
$username = "root";       // MySQL default username
$password = "";           // Default password for root is blank
$dbname = "submit_records"; // Database name you want to create

// Create a connection to MySQL
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' created or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Create the table if it doesn't exist
$table_sql = "CREATE TABLE IF NOT EXISTS submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($table_sql) === TRUE) {
    echo "Table 'submissions' created or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error);
}
?>
