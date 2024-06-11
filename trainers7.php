<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainers | Extreme Sports</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
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

    <!--BUYUK RESIMLI TRAINERS KISIM START-->
    <section id="tmain1">
        <div class="main1">
            <div class="container">
                <div class="tmain1-content">
                    <div class="tmain1-img anime-left">
                        <img id="trainercard-img" src="img/t7.jpg" alt="">
                    </div>
                    <div class="tmain1-text anime-right">
                        <h4>Owen Rutherford</h4>
                        <div id="tmain1ikon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div id="trainercard-description">
                            <p>As an avid thrill-seeker, I approach life with a relentless pursuit of adventure. With
                                each sunrise comes the promise of new challenges, fueling my desire for excitement.
                                These sports aren't just hobbies; they're an integral part of who I am, providing a
                                kaleidoscope of perspectives with every daring escapade. Join me as I dive into the
                                unknown, ready to embrace the rush of adrenaline and the joy of exploration!
                            </p>
                        </div>
                        <br> <br>
                        <div class="ticon-text">
                            <div id="tmainikon">
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <p id="trainercard-specialties">Surfing, Downhill Mountain Biking,Skiing & Snowboarding</p>
                        </div>
                        <br>
                        <button class="tmain1-button" onclick="window.location.href='form.php'">Appointment</button>

                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <script>
        window.sr = ScrollReveal();

        sr.reveal('.anime-left', {
            origin: 'left',
            duration: 1000,
            distance: '25rem',
            delay: 300
        });

        sr.reveal('.anime-right', {
            origin: 'right',
            duration: 1000,
            distance: '25rem',
            delay: 600
        });


    </script>
    <!--BUYUK RESIMLI KISIM FINISH-->
    <br>
    <br>
    <br>
    <br>

    <!--8 CARD TRAINERS SLIDER START-->
    <section class="trainercard-container">
        <div class="owl-carousel owl-theme">
            <!--1-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t3.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Evan Crossfield</span>
                    <p class="trainercard-text">Sky Diving, Bungee Jumping, Paragliding</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--2-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t1.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Aria Lockhart</span>
                    <p class="trainercard-text">Scuba Diving, Rafting, Surfing</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers2.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--3-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t4.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Liam Havers</span>
                    <p class="trainercard-text">Skiing & Snowboarding, Downhill Mountain Biking</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers3.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--4-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t2.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Elena Marwood</span>
                    <p class="trainercard-text">Bungee Jumping, Paragliding, Scuba Diving</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers4.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--5-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t5.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Jordan Fenwick</span>
                    <p class="trainercard-text">Scuba Diving, Rafting, Surfing, Downhill Mountain Biking</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers5.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--6-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t6.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Nina Blackwood</span>
                    <p class="trainercard-text">Scuba Diving, Rafting, Surfing, Bungee Jumping, Sky Diving</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers6.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--7-->
            <div class="trainercard item">
                <div class="trainercard-img">
                    <img src="img/t7.jpg" alt="">
                </div>

                <div class="trainercard-content">
                    <span class="trainercard-title">Trainers</span>
                    <span class="trainercard-name">Owen Rutherford</span>
                    <p class="trainercard-text">Surfing, Downhill Mountain Biking,Skiing & Snowboarding</p>
                    <button class="trainercard-button" onclick="window.location.href='trainers7.php'">Explore
                        Now</button>
                </div>
            </div>
        </div>
    </section>

    <!--8 CARD TRAINERS SLIDER FINISH-->
    <br>
    <br>
    <br>
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

                                <a href=#""><i class="fa-brands fa-instagram"></i></a>
                                <a href=#""><i class="fa-brands fa-youtube"></i></a>
                                <a href=#""><i class="fa-brands fa-facebook"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer-copyright">
                    <br>
                    <p> Created with by ReyhanK ⋆.˚🦋༘⋆ | All rights reserved.</p>

                </div>

            </div>
        </div>
    </footer>
    <!--FOOTER FINISH-->



    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>


    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>

</html>