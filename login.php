<?php
session_start(); // Fillon sesionin në fillim të skriptit

function login($email, $fjalekalimi) {
    $adminEmail = 'admin@gmail.com'; // Emaili i adminit
    $adminPassword = 'admin123'; // Fjalëkalimi i adminit

    if ($email == $adminEmail && $fjalekalimi == $adminPassword) {
        // Vendos variablat e sesionit pasi logini është i suksesshëm
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_email'] = $email;

        header('Location: dashboard-admin/dashboard.php'); // Ridrejto në dashboard.php
        exit();
    } 
}


if (isset($_POST['login'])) {
    login($_POST['email'], $_POST['fjalekalimi']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginForm">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="images/backgroundvideo.mp4" type="video/mp4">
        </video>

        <div class="login">
            <form method="POST" id="login-form" action="" name="login">
                <h1>Welcome back!</h1>
                <div class="input-box">
                    <input name="email" type="text" placeholder="email">
                </div>
                <div class="input-box">
                    <input name="fjalekalimi" type="password" placeholder="password">
                </div>
                <div class="forgot">
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
