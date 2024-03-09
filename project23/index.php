<!DOCTYPE html>
<html>
<head>
    <title>My Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process_login.php" method="post">
        Username: <input type="text" name="username" required>
        <br>
        Password: <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>