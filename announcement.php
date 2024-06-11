<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement| Extreme Sports</title>
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .announcement-section {
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 800px;
            border-radius: 8px;
        }

        .announcement {
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .announcement:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .announcement-title {
            font-size: 1.5em;
            color: #333;
        }

        .announcement-date {
            color: #999;
            font-size: 0.9em;
        }

        .announcement-content {
            margin-top: 10px;
            font-size: 1em;
            color: #555;
        }

        .footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .footer a {
            color: #fff;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .page-title h2 {
            margin-bottom: 10px;
        }

        #menuItems li {
            display: inline;
            margin-right: 10px;
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
                        <img src="img/logopng.png" alt="Logo">
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

    <!-- ANNOUNCEMENTS START -->
    <section class="announcement-section">
        <div class="announcement">
            <div class="announcement-title">Extreme Sports Event</div>
            <div class="announcement-date">June 10, 2024</div>
            <div class="announcement-content">Join us for an exciting day of extreme sports, including skateboarding, BMX, and more! Registration is now open.</div>
        </div>
        <div class="announcement">
            <div class="announcement-title">New Trainer Joined</div>
            <div class="announcement-date">June 15, 2024</div>
            <div class="announcement-content">We are thrilled to welcome John Doe to our team of trainers. John specializes in parkour and free running.</div>
        </div>
        <div class="announcement">
            <div class="announcement-title">Summer Camp Registration</div>
            <div class="announcement-date">June 20, 2024</div>
            <div class="announcement-content">Our summer camp for young athletes is now open for registration. Don't miss out on this opportunity to train with the best!</div>
        </div>
        
    </section>
    <!-- ANNOUNCEMENTS END -->

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
</body>
</html>
