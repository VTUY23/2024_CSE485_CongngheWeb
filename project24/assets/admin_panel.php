<?php
require_once 'users.php';
session_start();
if (
    !isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin"
) {
    header('Location: login.php');
}
// ... display admin panel content
// List users (implement pagination or filtering if needed)
echo "<h2>Users</h2>";
echo "<table border='1'>";
echo "<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
foreach ($users as $u) {
    echo "<tr><td>" . $u['username'] . "</td>";
    echo "<td>" . $u['name'] . "</td>";
    echo "<td>" . $u['email'] . "</td>";
    echo "<td>" . $u['role'] . "</td><td>";
    // Edit user link (consider using a separate page for editing)
    if ($u['username'] !== $_SESSION['user_id']) { // Prevent self-editing
        echo "<a href='edit_user.php?username=" . $u['username']
            . "&email=" . $u['email'] . "&name=" . $u['name'] . "'>Edit</a>";
    }
    echo "</td></tr>";
}
echo "</table><br><a href='profile.php'>Previous</a>";
