<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Adjust if you have a password
$dbname = "gym"; // Change to your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error variable
$error_message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST['cin'];
    $phone = $_POST['phone'];

    // Check if the CIN and phone number match
    $checkLogin = $conn->prepare("SELECT * FROM members WHERE CIN = ? AND phone = ?");
    $checkLogin->bind_param("ss", $cin, $phone);
    $checkLogin->execute();
    $result = $checkLogin->get_result();

    if ($result->num_rows > 0) {
        // Successful login, redirect to Profil.php
        header("Location: Profil.php");
        exit(); // Make sure to exit after redirecting
    } else {
        // Set error message for unsuccessful login
        $error_message = "Invalid CIN or phone number. Please try again.";
    }
    $checkLogin->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .login__form {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login__form label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        .login__form input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.5rem;
            border: 1px solid var(--text-light);
            border-radius: 4px;
            font-size: 1rem;
        }

        .login__form button {
            width: 100%;
        }

        .error-message {
            color: red;
            margin-top: -10px; /* Adjust spacing as needed */
            margin-bottom: 1rem;
        }

        .join {
            color: white;
            border-radius: 10px;
            background-color: red;
            padding: 10px;
        }

        .join:hover {
            background-color: white;
            color: red;
        }
    </style>
</head>
<body>
<nav>
    <div class="nav__bar">
        <div class="nav__header">
            <div class="nav__logo">
                <a href="#"><img src="assets/logo.png" alt="logo" /></a>
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
            <li><a href="signup.php" class="join">JOIN US</a></li>
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

                <?php if ($error_message): ?>
                    <div class="error-message"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <button type="submit" class="btn btn__primary">Login</button>
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
