<?php
session_start();
include "contreleur.php";

if(isset($_POST['join2'])){
  $c = new Contreleur();
  $cin = $_POST['cin'];
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $c->ajouter($cin, $firstname, $lastname, $email, $phone, $address, $gender);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
          <li><a href="login.php" class="join">JOIN US</a></li>
          
        </ul>
      </div>
    </nav>

    <header class="header">
    
    <div class="section__container" style="display: flex; justify-content: space-between; align-items: flex-start; padding: 10vw;">
        <div class="header__content" style="flex: 1; padding-right: 2rem;">
            <h1>Signup</h1>
            <h2>Join Our Gym Family</h2>
            <p>We’re excited to have you <br> join our community! Please fill <br> in the details below <br> to get started.</p>
            <li><a href="login.php" class="join">already have an account?</a></li>
        </div>
        <div class="signup__form" style="flex: 1;">
            <form action="" method="post">
                <label for="cin">CIN:</label>
                <input type="text" id="cin" name="cin" required>

                <label for="full_name">First Name:</label>
                <input type="text" id="full_name" name="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address">

                <!-- Gender Field (Dropdown) -->
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="homme" name="homme">Homme</option>
                    <option value="femme" name="femme">Femme</option>
                </select>

                <input type="submit" name="join2" class="join2" value="Sign Up">
            </form>

        </div>
    </div>
</header>

    

    <footer class="footer">
        <div class="footer__container">
            <div class="footer__bar">
                <p >&copy; 2024 Your Gym. All Rights Reserved.</p>
            </div>
        </div>
    </footer>




</body>
</html>
