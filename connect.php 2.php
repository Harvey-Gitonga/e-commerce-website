<?php
// Database configuration
define('DB_SERVER', 'localhost'); // Database server address, usually 'localhost'
define('DB_USERNAME', 'root');    // Database username
define('DB_PASSWORD', '');        // Database password
define('DB_DATABASE', 'corruccishop'); // Database name

// Create a connection
$con = mysqli_connect(hostname: 'localhost',username: 'root',password: '',database: 'corruccishop');

// Check the connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Connection successful
echo 'Connected successfully';
?>
