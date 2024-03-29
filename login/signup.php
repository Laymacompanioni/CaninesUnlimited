<?php
session_start();
    include("connections.php");
    include("funcations.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Create Accounts</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="resources/normalize.css">
</head>
<body id="formPage">
    
<!-- header -->
<header class="header-2">
    <nav class="navbar">
        <div class="container">
            
            <div class="logo-brand-toggle">
                <a href="../index.html" class="navbar-brand">
                    Canines <span>Unlimited</span>
                    </a>
                    <button type="button" class="navbar-toggle" id="navbar-toggle">
                        <img class="menu-bttn" src="../assets/menu.png">
                    </button>
            </div>
            <div class = "navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="/appt.html" class="nav-link">Book</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
            </nav>
            
</header>
<!-- login Form -->

<section class="signup">
    <div class="signup-container">
    <form method ="post" class="form" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="signupUsername" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input " autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input " autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <br>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign In</a>
            </p>
        </form>
    </div>
</section>
<script src="resources/jquery-3.6.0.js"></script>
<!-- custom js -->
<!-- <script src="js/account.js"></script> -->
<script src="../js/script.js"></script>

</body>
</html>