<?php
require_once 'users.php';
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $new['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // Handle avatar upload (similar to previous exercise)
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "uploads/"; // Adjust directory path
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $new['avatar'] = $targetFile; // Update avatar URL in array
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
    // Handle errors or update profile
    if (empty($errors)) {
        // Update user profile in database or persistent storage (replace with your logic)
        echo "Profile updated successfully!";
        if ($user['name'] != $new['name']) {
            fwrite(fopen("users.php", "a"), "\n\$user['name'] = '" . $new['name'] . "';");
        }
        if ($user['avatar'] != $new['avatar'] && !empty($new['avatar'])) {
            fwrite(fopen("users.php", "a"), "\n\$user['avatar'] = '" . $new['avatar'] . "';");
        }
        header("Location: index.php");
    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
