<!DOCTYPE html>
<html>
<head>
    <title>My Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <?php include 'profiles.php'; ?>
</head>
<body>
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2>Profile Information</h2>
        <img src="<?php echo $user['avatar']; ?>" class="rounded-circle" alt="Avatar" style="width: 100px; height: 100px;">
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
</html>
