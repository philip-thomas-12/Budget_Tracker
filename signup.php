<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user data from the form
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    // You can add further validation here, like checking if username is already taken, or hashing the password.
    
    // Redirect to the welcome page with the username as a query parameter
    echo "Welcome! $username";
    exit;
}
?>
