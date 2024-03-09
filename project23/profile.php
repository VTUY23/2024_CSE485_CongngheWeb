<?php
$users = [
    [
    "username" => "johndoe",
    "password" => password_hash("123", PASSWORD_DEFAULT), // Store hashed password
    "name" => "John Doe",
    "email" => "johndoe@example.com"
    ],
    [
    "username" => "janedoe",
    "password" => password_hash("234", PASSWORD_DEFAULT), // Store hashed password
    "name" => "Jane Doe",
    "email" => "janedoe@ẽxample.com"
    ]
   ];
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}

$username = $_SESSION['user_id'];

// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    // Display user information
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    // ... display other user details
} else {
    echo "Error: User not found.";
}
?>