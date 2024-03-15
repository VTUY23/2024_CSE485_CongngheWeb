<?php
session_start();
require_once '../app/functions.php';
if (isset($_SESSION['user_id'])) {
    header('Location: /'); // Redirect to login if not authenticated
} else {
    header('Location: /login.php?msg=You are not authenticated.');
}
$username = $_POST['username'];
$password = $_POST['password'];
// Check if username exists and password matches (use prepared statements in real DB)
$user_found = false;
if (getUserInfo($username)) {
    $user = getUserInfo($username);
} else {
    header('Location: /public/login.php?msg=Username or password not found.');
}
if ($user['Username'] === $username && ($password === $user['Password'])) {
    $user_found = true;
    $_SESSION['user_id'] = $user['Username'];
    $_SESSION['user_role'] = $user['Role'];
} else {
    header('Location: /public/login.php?msg=Invalid username or password.');
}
if ($user_found) {
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
    header('Location: /');
    echo "Login successful.";
}
