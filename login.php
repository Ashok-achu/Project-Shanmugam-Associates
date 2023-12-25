<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to SQLite database
    $db = new SQLite3('user_credentials.db');

    // Hash the provided password
    $hashed_password = hash('sha256', $password);

    // Query to check login credentials
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($query);

    if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $stored_password = $row['password'];
        
        // Compare hashed passwords
        if ($hashed_password === $stored_password) {
            // Successful login
            session_start(); // Start the session if not started already
            $_SESSION['admin'] = true;
            $_SESSION['user_logged_in'] = true;
            header('Location: uploadprojects.php');
            exit();
        }
    }

    // Invalid credentials
    echo '<script>alert("Invalid username or password. Please try again.");';
    echo 'window.location.href = "login.html";</script>';
    exit();

    $db->close();
}
?>
