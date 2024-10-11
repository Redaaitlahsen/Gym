<?php 
include 'connect.php';

class Contreleur {
    public function ajouter($cin, $firstname, $lastname, $email, $phone, $address, $gender) {
        $c = new Connect();
        $homme = "homme.jpg";
        $femme = "femme.jpg";

        
        if($gender == "homme") {
            $e = $c->updatedata("INSERT INTO members (member_cin, first_name, last_name, email, phone_number, address, member_img, gender) 
                                VALUES ('$cin', '$firstname', '$lastname', '$email', '$phone', '$address', '$homme', '$gender')");
            if($e){
                header("location: profil.php");
            }
        }
        if($gender == "femme") {
            $e = $c->updatedata("INSERT INTO members (member_cin, first_name, last_name, email, phone_number, address, member_img, gender) 
                                VALUES ('$cin', '$firstname', '$lastname', '$email', '$phone', '$address', '$femme', '$gender')");
            if($e){
                header("location: profil.php");
            }
        }
    }

    public function check($cin, $phone) {
        session_start();
        $c = new Connect();
        $sql = "SELECT * FROM members WHERE member_cin='$cin' AND phone_number='$phone'";
        $result = $c->selectdata($sql);
        
        if ($result->rowCount() > 0) {
            $_SESSION['user'] = $cin;
            header("location: profil.php");
        } else {
            $_SESSION['error_message'] = "Invalid CIN or phone number. Please try again.";
            header("location: login.php");
            exit();
        }
    }

    public function profileinfo($cin) {

        $c = new Connect();
        $sql = "SELECT * FROM members WHERE member_cin='$cin'";
        $result = $c->selectdata($sql);
    
        if ($result->rowCount() > 0) {
            return $result->fetch();
        }
    }
    
    
}


?>