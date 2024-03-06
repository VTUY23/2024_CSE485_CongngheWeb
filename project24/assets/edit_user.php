<?php
require_once 'users.php';
session_start();
if (
    !isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin"
) {
    header('Location: login.php');
}
echo "<h2>Edit User: " . $_GET['username'] . "</h2>";
?>
<form action="update_profile.php" method="post">
    <label for="username">User name:</label>
    <input name="username" value="<?php echo $_GET['username']; ?>">
    <br>
    <label for="username">Password:</label>
    <input name="password" value="">
    <br>
    <label for="username">Email:</label>
    <input name="email" value="<?php echo $_GET['email']; ?>">
    <br>
    <label for="username">Name:</label>
    <input name="name" value="<?php echo $_GET['name']; ?>">
    <br>
    <button type="submit">Save</button>
    <a href="admin_panel.php">Cancel</a>
</form>