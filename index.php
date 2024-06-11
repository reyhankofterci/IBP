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
    
</head>

<body>
    <!--HEADER START-->
    <header>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="img/logopng.png" alt="">
                    </div>
                    <div class="menu">
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

                <div class="row"> <!--kolonlara böldüm -->
                    <div class="col-2">
                        <h1>THIS <br><span>IS LIFE</span></h1>
                        <p>You will travel to the heart of extreme sports and enjoy adventures that push the boundaries. Let's explore the most exciting moments of life together!</p>
                        <a href="form.php" class="btn">Explore Now</a>
                        
                    </div>
                    <div class="col-2">
                        <div class="box">
                            <video src="img/ekstremvideo.mp4" autoplay muted loop></video>
                            <img src="img/000.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!--HEADER FINISH-->


    <!--ABOUT START-->
    <section id="about">
        <div class="about">
            <div class="container">
                <div class="about-title">
                    <h2>ABOUT</h2>
                </div>
                <div class="about-content">
                    <div class="about-img anime-left">
                        <img src="img/aboutresim.jpg" alt="">
                    </div>
                    <div class="about-text anime-right">
                        <h4>Extreme Sports</h4>
                        <div id="aboutikon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Our goal is to inspire everyone who is looking for adrenaline and excitement and encourage them to push their limits. We are proud to share extreme sports experiences and information with you on a wide range of sports, from mountaineering to diving, from skydiving to skateboarding.
                             <br> We offer special programs for both beginners and experienced athletes with the training and events we organize accompanied by our instructors. We provide the necessary information and equipment for a safe and enjoyable experience, and bring sports enthusiasts together with community events. </p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!--ABOUT FINISH-->

    <!--SPORT BASLIK YAZISI-->
    <section id="baslık">
        <div class="baslıkspor">
            <h2>EXTREME SPORTS</h2>
        </div>
    </section>


    <!--SPORTS START-->
    <section id="sports">
        <div class="sports">
            <div class="sports-item ani1">
                <a href="sports2.php">
                <img src="img/01.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-parachute-box"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani2">
                <a href="sports3.php">
                <img src="img/02.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-water"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani3">
                <a href="sports4.php">
                <img src="img/03.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-person-skiing"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani4">
                <a href="sports.php">
                <img src="img/04.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-parachute-box"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani5">
                <a href="sports5.php">
                <img src="img/05.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-water"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani6">
                <a href="sports6.php">
                <img src="img/06.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani7">
                <a href="sports7.php">
                <img src="img/07.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-parachute-box"></i>
                </div>
            </a>
            </div>
            <div class="sports-item ani8">
                <a href="sports8.php">
                <img src="img/08.jpg" alt="">
                <div class="overlay">
                    <i class="fa-solid fa-water"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
    </section>
    <!--SPORTS FINISH-->





    <!--TRAINERS BASLIK YAZISI-->
    <section id="baslık">
        <div class="baslıktrainers">
            <h2>TRAINERS</h2>
        </div>
    </section>

    <!--TRAINERS START-->
    <section class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!--1e-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t3.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Evan Crossfield</span>
                    <p class="card-text">Sky Diving, Bungee Jumping, Paragliding</p>
                    <button class="card-button" onclick="window.location.href='trainers.php'"> Explore Now</button>
                </div>
            </div>
            <!--2k-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t1.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Aria Lockhart</span>
                    <p class="card-text">Scuba Diving, Rafting, Surfing</p>
                    <button class="card-button" onclick="window.location.href='trainers2.php'">Explore Now</button>
                </div>
            </div>
            <!--3e-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t4.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Liam Havers</span>
                    <p class="card-text">Skiing & Snowboarding, Downhill Mountain Biking</p>
                    <button class="card-button" onclick="window.location.href='trainers3.php'">Explore Now</button>
                </div>
            </div>
            <!--4k-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t2.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Elena Marwood</span>
                    <p class="card-text">Bungee Jumping, Paragliding, Scuba Diving</p>
                    <button class="card-button" onclick="window.location.href='trainers4.php'">Explore Now</button>
                </div>
            </div>
            <!--5e-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t5.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Jordan Fenwick</span>
                    <p class="card-text">Scuba Diving, Rafting, Surfing, Downhill Mountain Biking </p>
                    <button class="card-button" onclick="window.location.href='trainers5.php'">Explore Now</button>
                </div>
            </div>

            <!--6k-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t6.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Nina Blackwood</span>
                    <p class="card-text">Scuba Diving, Rafting, Surfing, Bungee Jumping, Sky Diving </p>
                    <button class="card-button" onclick="window.location.href='trainers6.php'">Explore Now</button>
                </div>
            </div>

            <!--7e-->
            <div class="card swiper-slide">
                <div class="card-img">
                    <img src="img/t7.jpg" alt="">
                </div>

                <div class="card-content">
                    <span class="card-title">Trainers</span>
                    <span class="card-name">Owen Rutherford</span>
                    <p class="card-text"> Surfing, Downhill Mountain Biking,Skiing & Snowboarding </p>
                    <button class="card-button" onclick="window.location.href='trainers7.php'">Explore Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

    <!--TRAINERS FINISH-->

    <!--CONTACT STARTS-->

    <section id="contact">
        <div class="contact">
            <div class="page-title">
                <h2>CONTACT</h2>
            </div>

            <div class="contact-content">
                <div class="contact-item anime-top">
                    <i class="fa-solid fa-phone"></i>
                    <p>+1 (415) 555-6778</p>
                   
                </div>
            

            
                <div class="contact-item anime-bottom">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>123 Adrenaline St., Adventure City, CA 90210, USA</p>
                </div>
            

            
                <div class="contact-item anime-top ">
                    <i class="fa-solid fa-envelope"></i>
                    <p>info@extremelife.com</p>
                    
                </div>
            
        </div>
    </section>

    <!--CONTACT MESAJ-->

    <section id="iletisim">
        <div class="container">
            <form action="index.php" method="post">
            <div id="formgroup">
                <div id="solform">
                    <input type="text" name="isim"
                    placeholder="Name Surname" required>
                    <input type="text" name="tel"
                    placeholder="Phone Number" required>
                </div>
                <div id="sagform">
                    <input type="text" name="email"
                    placeholder="Mail" required>
                    <input type="text" name="konu"
                    placeholder="Subject" required>
                </div>

                <textarea name="mesaj" id="" cols="30" placeholder="Message"
                rows="3" required class="form-control"></textarea>

                <input type="submit" value="Send">  
            </div>
            </div>
            </form>
        </div>
    </section>



    <!--CONTACT FINISH-->

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
                    <p>     Created with by ReyhanK ⋆.˚🦋༘⋆ | All rights reserved.</p>
                    
                </div>
                
            </div>
        </div>
    </footer>
    <!--FOOTER FINISH-->



    <!--header menu responsive-->
    <script>
        var menuItems = document.getElementById("menuItems");
        menuItems.style.maxHeight="0px";

        function menuToggle(){
            if(menuItems.style.maxHeight=="0px"){
                menuItems.style.maxHeight="200px";
            }else{
                menuItems.style.maxHeight="0px"
            }
        }
    </script>




    <!--ABOUT KISMI ScrollReveal.js-->
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
        sr.reveal('.anime-top', {
            origin: 'top',
            duration: 1000,
            distance: '25rem',
            delay: 400
        });

        sr.reveal('.anime-bottom', {
            origin: 'bottom',
            duration: 1000,
            distance: '25rem',
            delay: 400
        });
        
    </script>

    <!--SPORTS KISMI ScrollReveal.js-->

    <script>
        ScrollReveal().reveal('.ani1',{delay:250});
        ScrollReveal().reveal('.ani2',{delay:500});
        ScrollReveal().reveal('.ani3',{delay:750});
        ScrollReveal().reveal('.ani4',{delay:1000});
        ScrollReveal().reveal('.ani5',{delay:1250});
        ScrollReveal().reveal('.ani6',{delay:1500});
        ScrollReveal().reveal('.ani7',{delay:1750});
        ScrollReveal().reveal('.ani8',{delay:2000});
    </script>






</body>

</html>

<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["email"], $_POST["konu"], $_POST["mesaj"]))
{
    $namesurname = $_POST["isim"];
    $phonenumber = $_POST["tel"];
    $email = $_POST["email"];
    $subject = $_POST["konu"];
    $message = $_POST["mesaj"];

    // Use prepared statements to prevent SQL injection
    $stmt = $baglan->prepare("INSERT INTO contact (`Name Surname`, `Phone Number`, `E-mail`, `Subject`, `Message`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $namesurname, $phonenumber, $email, $subject, $message);

    if($stmt->execute())
    {
        echo "<script>alert('Your Message has been sent successfully.')</script>";
    }
    else
    {
        echo "<script>alert('An error occurred while sending your message.')</script>";
    }
    $stmt->close();
    $baglan->close();
}
?>
