<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/globals.css">
    <title>Giuseppe's - Register Form</title>
</head>
<body>
    <?php require "../php/navbar/navbar.php" ?>
    <form action="./check_signup.php" method="post" class="login-form">
        <h1>Registration Form</h1>

        <label for="username"><b>Email:</b></label>
        <input type="email" name="username" class="login-input" id="login-email" placeholder="janedoe@gmail.com" required>

        <label for="password"><b>Password:</b></label>
        <input type="password" name="password" class="login-input" id="login-password" placeholder="Enter Password" required>

        <label for="ConfirmPassword"><b>Confirm Password:</b></label>
        <input type="password" name="ConfirmPassword" class="login-input" id="login-password" placeholder="Repeat Password" required>

        <label for="firstname"><b>Name:</b></label>
        <input type="text" name="firstname" class="login-input" id="login-name" placeholder="Jane" required>

        <label for="surname"><b>Surname:</b></label>
        <input type="text" name="surname" class="login-input" id="login-surname" placeholder="Doe" required>

        <a href="./register.php"><button type="submit" class="register-btn" name="Submit" class="submit">Register me</button></a>
    </form><br><br>
    <a href="./login.php">Zpet na prihlaseni</a>
</body>
</html>