<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'graygear';

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// RETRIEVE FROM DATABASE
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute query
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) === 1) {
    // User found
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];
    
    // Verify password
    if ($password === $storedPassword) {
        // Passwords match
        // Authenticated, start a session
        session_start();
        $_SESSION['username'] = $username;
        
        header("Location: index.php");
        exit();
    }
}

// Authentication failed, redirect back with error message
$errorMsg = "Incorrect email or pin. Please try again.";
header("Location: ../login.php?error=" . urlencode($errorMsg));


?>