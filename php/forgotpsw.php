<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/globals.css">
    <title>Document</title>
</head>
<body>
    <?php require "../php/navbar/navbar.php" ?>
    <form action="update_password.php" method="post">
        <h1>Create New Password</h1>

        <label for="username"><b>Email:</b></label>
        <input type="email" name="username" class="login-input" id="login-email" placeholder="janedoe@gmail.com" required>

        <label for="new_password"><b>Password:</b></label>
        <input type="password" name="new_password" class="login-input" id="login-password" placeholder="Enter Password" required>

        <label for="confirm_new_password"><b>Confirm New Password:</b></label>
        <input type="password" name="confirm_new_password" class="login-input" id="login-password" placeholder="Repeat Password" required>

        <a href="./register.php"><button type="submit" class="register-btn" name="update_password" class="submit">Update Password</button></a>
    </form><br><br>
    <a href="./login.php">Back to login</a>
</body>
</html>