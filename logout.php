<?php
session_start(); // Start the session

// Check if the user is logged in, then log them out
if (isset($_SESSION['admin'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
}

// Redirect to the login page after logout
header("Location: index.php");
exit();
?>
