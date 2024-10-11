<?php
session_start();
include "contreleur.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
} else {
    $cin = $_SESSION['user'];
    $c = new Contreleur();
    $memberInfo = $c->profileinfo($cin);

    if (isset($_POST['logout'])) {
        session_destroy(); 
        header("Location: login.php"); 
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styless.css">
    <style>
        .profile__container {
            max-width: 600px;
            margin: auto;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flexbox to align items */
            align-items: center; /* Center items vertically */
        }

        .profile__info {
            flex: 1; /* Allow text to fill remaining space */
        }

        .profile__image {
            flex: 0 0 150px; /* Fixed width for the image */
            margin-left: 1.5rem; /* Space between text and image */
        }

        .profile__image img {
            width: 100%; /* Make image responsive */
            height: auto; /* Maintain aspect ratio */
            border-radius: 50%; /* Round the image */
        }

        .profile__info label {
            font-weight: 500;
            color: var(--text-dark);
        }

        .logout {
            margin-top: 2rem;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: red;
            color: white;
            cursor: pointer;
        }

        .logout:hover {
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
                <a href="#"><img src="images/logos/logo.png" alt="logo" /></a>
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
    <div class="section__container" style="padding: 4rem;">
        <div class="profile__container">
            <div class="profile__info">
                <h1>Welcome, <?php echo htmlspecialchars($cin); ?>!</h1>
                <p>Here are your profile details:</p>
                <div>
                    <label for="cin">CIN:</label>
                    <p><?php echo htmlspecialchars($cin); ?></p>
                </div>
                <div>
                    <label for="first_name">First Name:</label>
                    <p><?php echo htmlspecialchars($memberInfo['first_name']); ?></p>
                </div>
                <div>
                    <label for="last_name">Last Name:</label>
                    <p><?php echo htmlspecialchars($memberInfo['last_name']); ?></p>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <p><?php echo htmlspecialchars($memberInfo['email']); ?></p>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <p><?php echo htmlspecialchars($memberInfo['phone_number']); ?></p>
                </div>
                <div>
                    <label for="address">Address:</label>
                    <p><?php echo htmlspecialchars($memberInfo['address']); ?></p>
                </div>
                <div>
                    <label for="gender">Gender:</label>
                    <p><?php echo htmlspecialchars($memberInfo['gender']); ?></p>
                </div>
                <form action="" method="post">
                    <button type="submit" class="logout" name="logout">Logout</button>
                </form>
            </div>
            <div class="profile__image">
                <img src="images/profile/<?php echo htmlspecialchars($memberInfo['member_img']); ?>" alt="Profile Picture">
            </div>
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
