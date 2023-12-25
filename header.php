<?php
session_start(); // Start the session

// Check if the admin is logged in
if (isset($_SESSION['admin'])) {
    // Display the logout button
    echo '<form action="logout.php" method="post">';
    echo '<button type="submit" name="logout">Logout</button>';
    echo '</form>';
}
?>
