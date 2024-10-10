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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST['cin'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Check if the email already exists
    $checkEmail = $conn->prepare("SELECT * FROM members WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please use a different email.');</script>";
    } else {
        // Proceed with the insert since the email is not duplicated
        $sql = "INSERT INTO members (CIN, full_name, email, phone, address, role, membership_status)
                VALUES (?, ?, ?, ?, ?, 'Member', 'Inactive')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $cin, $full_name, $email, $phone, $address);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!'); window.location.href='Profil.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    }
    $checkEmail->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .signup__form {
  max-width: 400px;
  margin: auto;
  padding: 2rem;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.signup__form label {
  display: block;
  margin-bottom: 0.5rem;
  color: var(--text-dark);
  font-weight: 500;
}

.signup__form input {
  width: 100%;
  padding: 0.75rem;
  margin-bottom: 1.5rem;
  border: 1px solid var(--text-light);
  border-radius: 4px;
  font-size: 1rem;
}

.signup__form button {
  width: 100%;
}
.join{
  color: white;
  border-radius: 10px;
  background-color: red;
  padding:10px;
}

.join:hover{
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
          <li><a href="login.php" class="join">JOIN US</a></li>
          
        </ul>
      </div>
    </nav>

    <header class="header">
    
    <div class="section__container" style="display: flex; justify-content: space-between; align-items: flex-start; padding: 8rem;">
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

                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address">

                <button type="submit" class="btn btn__primary">Sign Up</button>
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
