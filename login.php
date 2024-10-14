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
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="templateStyle.css">
        
</head>
<body>
<?php include 'includes/templateNavbar.php'; ?>
<header class="header">
    <div class="section__container">
        <div class="row">
            <div class="col-sm">
            <div class="header__content">
            <h1>Login</h1>
            <h2>Welcome Back!</h2>
            <p>Please enter your details below to access your profile.</p>
            <a href="signup.php" class="join">Don't have an account? Sign up here!</a>
        </div>
            </div>
            <div class="col-sm">
            <div class="login__form">
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
        </div>
        
    </div>
</header>
<?php include 'includes/footer.php'; ?>
<script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js">
        
      </script>
    <script src="main.js"></script>
</body>
</html>
