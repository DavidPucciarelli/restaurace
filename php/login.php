<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/globals.css">
    <title>Giuseppe's - Login</title>

</head>
<body>
    <?php require "../php/navbar/navbar.php" ?>
    <form action="action_page.php" method="post" class="login-form">
        <div class="login-container">
            <label for="login-email"><b>Email:</b></label>
            <input type="email" name="login-email" class="login-input" id="login-email" placeholder="janedoe@gmail.com" required>

            <label for="login-password"><b>Password:</b></label>
            <input type="password" name="login-password" class="login-input" id="login-password" placeholder="Enter Password" required>

            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me

            </label>
            <button type="submit">Login</button>

            <div class="container-forgot-a-password">
                <button type="button" class="cancelbtn">Cancel</button>
                <span>Forgot <a href="./forgotpsw.php">password?</a></span>
            </div>
            <div>
                <label for="register">Do not have an account yet?</label>
                <a href="./register.php"><button type="button" class="register-btn">Register</button></a>
            </div>
        </div>
    </form>
</body>
<script src="../js/burger_menu.js"></script>
</html>