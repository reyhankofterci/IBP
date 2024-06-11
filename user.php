<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Extreme Sports</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
            text-align: center;
        }

        .form-box {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 20px;
        }

        .form-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-box button {
            padding: 10px 20px;
            background:  rgba(83, 6, 6, 0.833);
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-box button:hover {
            background: rgba(83, 6, 6, 0.833);
        }

        .logout-btn {
            padding: 10px 20px;
            background: #dc3545;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .logout-btn:hover {
            background: #c82333;
        }
    </style>
</head>

<body>
    <!--HEADER START-->
    <header>
        <div class="headers">
            <div class="containers">
                <div class="navbars">
                    <div class="logos">
                        <img src="img/logopng.png" alt="">
                    </div>
                    <div class="menus">
                        <ul id="menuItems">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#about">About</a></li>
                            <li><a href="sports.php">Sports</a></li>
                            <li><a href="trainers.php">Trainers</a></li>
                            <li><a href="index.php#contact">Contact</a></li>
                            <li><a href="announcement.php">Announcement</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="user.php"><i class="fa-solid fa-user"></i></a></li>
                        </ul>
                        <i class="fa-solid fa-bars" id="menu-icon" onclick="menuToggle()"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER FINISH-->

    <div class="container">
        <div class="form-box">
            <h2>Change Password</h2>
            <form id="change-password-form">
                <input type="password" id="current-password" name="current-password" placeholder="Current Password" required>
                <input type="password" id="new-password" name="new-password" placeholder="New Password" required>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm New Password" required>
                <button type="submit">Change Password</button>
            </form>
            <button class="logout-btn" onclick="logout()">Log Out</button>
        </div>
    </div>

    <!--FOOTER START-->
    <footer id="footer">
        <div class="footer">
            <div class="footer-content">
                <div class="page-title">
                    <h2>ABOUT US</h2>
                </div>
                <div>
                    <nav class="footer-social">
                        <ul>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer-copyright">
                    <br>
                    <p>Created with by ReyhanK ⋆.˚🦋༘⋆ | All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER FINISH-->

    <script>
        function logout() {
            // Add your logout functionality here
            window.location.href = 'login.php'; // Redirect to login page after logging out
        }
    </script>

</body>

</html>
<?php
include("baglanti.php");

if(isset($_POST["change_password"])) {
    $username = $_POST["username"];
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];

    // Check if the old password is correct
    $check_password = "SELECT * FROM users WHERE Username='$username' AND Password='$old_password'";
    $result = mysqli_query($baglan, $check_password);

    if(mysqli_num_rows($result) > 0) {
        // Update the password
        $update_password = "UPDATE users SET `Password`='$new_password' WHERE Username='$username'";
        $update_result = mysqli_query($baglan, $update_password);

        if($update_result){
            echo "<script>alert('Password changed successfully.')</script>";
        } else {
            echo "<script>alert('There was a problem updating the password.')</script>";
        }
    } else {
        echo "<script>alert('Old password is incorrect.')</script>";
    }

    mysqli_close($baglan);
}
?>