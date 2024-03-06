<?php
require 'users.php'; // Include users array
session_start(); // Start session
$username = $_POST['username'];
$password = $_POST['password'];
// Check if username exists
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_id'] = $user['username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
    header('Location: profile.php'); // Redirect to profile page
} else {
    // Login failed
    echo "Invalid username or password.";
}
