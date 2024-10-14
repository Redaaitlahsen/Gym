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
<?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="templateStyle.css">
    </head>
<body>
<?php include 'includes/templateNavbar.php'; ?>
    <header class="header" id="header">
    
    <div class="section__container" >
      <div class="row">
        <div class="col-sm">
        <div class="header__content" >
            <h1>Signup</h1>
            <h2>Join Our Gym Family</h2>
            <p>We’re excited to have you join our community! Please fill in the details below to get started.</p>
            <a href="login.php" class="join">already have an account?</a>
        </div>
        </div>
        <div class="col-sm">
        <div class="signup__form" >
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
