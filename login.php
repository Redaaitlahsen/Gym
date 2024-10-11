<?php
session_start();
include "contreleur.php";

if (isset($_POST['join2'])) {
    $c = new Contreleur();
    $cin = $_POST['cin'];
    $phone = $_POST['phone'];
    
    $c->check($cin, $phone);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styless.css" />

</head>
<body>
<nav>
    <div class="nav__bar">
        <div class="nav__header">
            <div class="nav__logo">
                <a href="index.html"><img src="images\logos/logo.png" alt="logo" /></a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>
        </div>
        <ul class="nav__links" id="nav-links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#trainer">TRAINER</a></li>
            <li><a href="#client">CLIENT</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><a href="signup.php" class="join">LOGIN</a></li>
        </ul>
    </div>
</nav>

<header class="header">
    <div class="section__container" style="display: flex; justify-content: space-between; align-items: flex-start; padding: 8rem;">
        <div class="header__content" style="flex: 1; padding-right: 2rem;">
            <h1>Login</h1>
            <h2>Welcome Back!</h2>
            <p>Please enter your details below to access your profile.</p>
            <li><a href="signup.php" class="join">Don't have an account? Sign up here!</a></li>
        </div>
        <div class="login__form" style="flex: 1;">
            <form action="" method="post">
                <label for="cin">CIN:</label>
                <input type="text" id="cin" name="cin" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>

                <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="error-message"><?php echo $_SESSION['error_message']; ?></div>
                    <?php unset($_SESSION['error_message']); ?>
                <?php endif; ?>

                <input type="submit" class="join2" name="join2" value="Login">
            </form>
        </div>
    </div>
</header>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__bar">
            <p>&copy; 2024 Your Gym. All Rights Reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
