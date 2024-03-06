<?php
require_once 'users.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user['username'] = filter_input(INPUT_POST, 'username');
    $user['password'] = filter_input(INPUT_POST, 'password');
    $user['name'] = filter_input(INPUT_POST, 'name');
    $user['email'] = filter_input(INPUT_POST, 'email');
    if ($user['username'] !== $users[0]['username']) {
        fwrite(fopen("users.php", "a"), "\n\$users[0]['username'] = '" . $user['username'] . "';");
    }
    if (!password_verify($user['password'], $users[0]['password'])&&$user['password'] != null) {
        fwrite(fopen("users.php", "a"), "\n\$users[0]['password'] = password_hash('" . $user['password'] . "', PASSWORD_DEFAULT);");
    }
    if ($user['name'] != $users[0]['name']) {
        fwrite(fopen("users.php", "a"), "\n\$users[0]['name'] = '" . $user['name'] . "';");
    }
    if ($user['email'] != $users[0]['email']) {
        fwrite(fopen("users.php", "a"), "\n\$users[0]['email'] = '" . $user['email'] . "';");
    }
    header("Location:admin_panel.php");
}
