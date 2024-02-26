<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.css" rel="stylesheet">
    <title>Thong tin</title>
</head>

<body>
    <?php include 'profile.php'; ?>
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2>Profile Information</h2>
        <img src="<?php echo $user['avatar']; ?> " class="rounded-circle" alt="avatar" style="width: 100; height: 100;">
        <br>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
        <br>
        <label for="avatar">Avatar:</label>
        <input type="file" name="avatar" accept="image/*">
        <br>
        <button type="submit">Update Profile</button>
    </form>
</body>