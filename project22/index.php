<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROM</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <?php require_once 'users.php'; ?>
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <img src="<?php echo $user['avatar']; ?>" alt="">
        <h2>Profile Information</h2>
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