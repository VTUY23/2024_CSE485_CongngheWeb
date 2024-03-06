<?php
require_once 'users.php';
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];
$user = null;
// Retrieve user data based on username (use prepared statements in real DB)
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    // Display user information based on authorization level
    $user_role = $_SESSION['user_role'];
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    if ($authorization_levels[$user_role]['edit_profile_basic']) {
        echo "<br>Edit basic profile information (link)";
    }
    if (
        $user_role === "admin" &&
        $authorization_levels[$user_role]['access_admin_panel']
    ) {
        echo "<br><a href='admin_panel.php'>Admin Panel</a>";
    }
    // ... display other information based on permissions
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    echo "Error: User not found.";
}
