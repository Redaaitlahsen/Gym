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
    background-color: rgba(255, 255, 255, 0.9); /* Increased opacity for better readability */
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); /* Slightly stronger shadow for depth */
    display: flex;
    align-items: center;
}

.profile__info {
    flex: 1;
    padding-right: 1.5rem; /* Add padding to separate from image */
}

.profile__info p {
    margin: 1rem 0; /* Spacing between profile details */
    font-size: 1.1rem; /* Slightly larger font size for readability */
}

.profile__image {
    flex: 0 0 150px;
    margin-left: 1.5rem;
}

.profile__image img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* Add subtle shadow to the image */
}

.profile__info label {
    font-weight: 600; /* Slightly bolder labels */
    color: var(--text-dark);
    margin-right: 10px; /* Space between label and text */
}

.logout {
    margin-top: 2rem;
    padding: 10px 20px; /* Add more padding for a larger button */
    border: none;
    border-radius: 5px;
    background-color: red;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition effect */
}

.logout:hover {
    background-color: white;
    color: red;
    border: 1px solid red; /* Add a border on hover for emphasis */
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
                <h1>Welcome, <?php echo htmlspecialchars($memberInfo['first_name']); ?>!</h1>
                <br><hr><br>
                <p>Here are your profile details:</p>
                <br>
                <div>
                    <p class="profile-detail"><label for="cin">CIN:</label> <?php echo htmlspecialchars($cin); ?></p>
                </div>
                <div>
                    <p class="profile-detail"><label for="first_name">First Name:</label> <?php echo htmlspecialchars($memberInfo['first_name']); ?></p>
                </div>
                <div>
                    <p class="profile-detail"><label for="last_name">Last Name:</label> <?php echo htmlspecialchars($memberInfo['last_name']); ?></p>
                </div>
                <div>
                    <p class="profile-detail"><label for="email">Email:</label> <?php echo htmlspecialchars($memberInfo['email']); ?></p>
                </div>
                <div>
                    <p class="profile-detail"><label for="phone_number">Phone Number:</label> <?php echo htmlspecialchars($memberInfo['phone_number']); ?></p>
                </div>
                <div>
                    <p class="profile-detail"><label for="address">Address:</label> <?php echo htmlspecialchars($memberInfo['address']); ?></p>
                </div>
                <div>
                    <p class="profile-detail"><label for="gender">Gender:</label> <?php echo htmlspecialchars($memberInfo['gender']); ?></p>
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
