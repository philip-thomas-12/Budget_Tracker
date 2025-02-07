<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Basic validation
    if (!empty($username) && !empty($password)) {
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Password: " . htmlspecialchars($password); // In real-world, never display passwords
    } else {
        echo "Please fill in both fields.";
    }
} else {
    echo "Invalid request.";
}
?>
