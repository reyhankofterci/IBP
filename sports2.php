<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Extreme Sports</title>
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

    <!--BUYUK RESIMLI KISIM START-->
    <section id="main1">
        <div class="main1">
            <div class="container">
                <div class="main1-content">
                    <div class="main1-img anime-left">
                        <img src="img/01.jpg" alt="">
                    </div>
                    <div class="main1-text anime-right">
                        <h4>SKY DIVING</h4>
                        <div id="main1ikon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Probably one of the oldest of all extreme sports, skydiving originated over 200 years ago.
                            The sport has since evolved into jumping from aircraft and doing a variety of midair tricks
                            before deploying the parachute. Although it is a widely practiced sport, it still carries a
                            considerable amount of risk and produces an adrenaline rush that is described as addictive.
                            <br> <br>
                        <div class="icon-text">
                            <div id="mainikon">
                                <i class="fa-solid fa-exclamation"></i>
                            </div>
                            <p>Patients with Heart Disease or High Blood Pressure and pregnant women cannot do it.</p>
                        </div>
                        <br>
                        <button class="main1-button" onclick="window.location.href='form.php'">Appointment</button>

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
    <br>

    <!--8 CARD SLİDER START-->
    <section class="sportcard-container">
        <div class="owl-carousel owl-theme">
            <!--1 SKY DIVING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/01.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">SKY DIVING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports2.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--2 SCUBA DIVING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/02.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">SCUBA DIVING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports3.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--3 SKIING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/03.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">SKIING&SNOWBOARDING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports4.php'">Explore
                        Now</button>
                </div>
            </div>
            <!--4 BUNGEE JUMPING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/04.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">BUNGEE JUMPING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports.php'">Explore
                        Now</button>
                </div>
            </div>
            <!--5 RAFTING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/05.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">RAFTING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports5.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--6.MOUNTAIN BIKING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/06.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">MOUNTAIN BIKING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports6.php'">Explore
                        Now</button>
                </div>
            </div>

            <!--7. PARAGLIDING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/07.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">PARAGLIDING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports7.php'">Explore
                        Now</button>
                </div>
            </div>


            <!--8. SURFING-->
            <div class="sportcard item">
                <div class="sportcard-img">
                    <img src="img/08.jpg" alt="">
                </div>

                <div class="sportcard-content">
                    <span class="sportcard-title">SURFING</span>
                    <span class="sportcard-name">-Extreme Sports-</span>
                    <p class="sportcard-text">☆ ★ ✮ ★ ☆</p>
                    <button class="trainercard-button" onclick="window.location.href='sports8.php'">Explore
                        Now</button>
                </div>
            </div>
        </div>
    </section>

    <!--8 CARD SLİDER FINISH-->


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