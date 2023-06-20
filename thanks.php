<?php include 'process_form.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Gravity Packers and Movers</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Styles for responsive screen */
        @media screen and (max-width: 768px) {
            .navbar-menu ul.menu li a {
                color: black !important;
                margin-left: -15px;
                gap: 10px;
            }

            .navbar-menu .menu {
                gap: 10px;
            }
        }
    </style>


    <style>
        .navbar-content {
            overflow: hidden;
            background-color: #420106
        }

        #moving-form {
            white-space: nowrap;
            animation: moveLeft 20s infinite linear;
            animation-delay: -20s;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
            display: inline-block;
            width: 100%;
        }

        #moving-form span {
            color: white;
            font-size: 20px;
        }

        @keyframes moveLeft {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        #phone-number {
            margin-right: 20px;
            /* Adjust the value to increase or decrease the space */
        }

        #email {
            margin-right: 20px;
            /* Adjust the value to increase or decrease the space */
        }

        #moving-form a.social-link {
            display: inline-block;
            margin-left: 10px;
        }

        #moving-form a.social-link i {
            font-size: 20px;
            color: #fff;
        }

        hr {
            border-top: 1px solid #ff0000;
        }
    </style>
    <style>
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container2 {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 100px;
        }

        h1 {
            font-size: 28px;
            color: #333333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666666;
            margin-bottom: 30px;
        }

        .thank-you-image {
            margin-top: 30px;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            background-color: #333333;
            color: #ffffff;
            border-radius: 50%;
            font-size: 20px;
            line-height: 40px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .social-icons a:hover {
            background-color: #555555;
        }

        .toggle-icon {
            /* Add the following line to change the color of the toggle icon to black */
            filter: invert(1);
        }
    </style>


</head>

<body>
    <!--header section start -->
    <div class="navbar-content">
        <div id="moving-form">
            <span id="phone-number" style="font-size: 30px;">Phone: 9380153945 / 8431881266</span>
            <span id="email" style="font-size: 30px;">E-mail :info@gravitypackersandmovers.com</span>
            <a href="https://www.facebook.com/profile.php?id=100093344330589" target="_blank" class="social-link"><i
                    class="fab fa-facebook" style="font-size: xx-large;"></i></a>
            <a href="https://www.instagram.com/gravitypackers/" target="_blank" class="social-link"><i
                    class="fab fa-instagram" style="font-size: xx-large;"></i></a>
            <a href="https://www.linkedin.com/company/95059790/admin/?feedType=following" target="_blank"
                class="social-link"><i class="fab fa-linkedin" style="font-size: xx-large;"></i></a>
            <a href="https://twitter.com/gravitypackers" target="_blank" class="social-link"><i class="fab fa-twitter"
                    style="font-size: xx-large;"></i></a>
        </div>
        <hr>
    </div>
    <!--header section start -->
    <div class="header_section">
        <nav class="navbar" style="    background-color: #420106;; margin-top: -15px; height: 120px;">
            <div class="container" style="margin-top: -20px;">
                <div class="navbar-logo">
                    <a href="index.php"><img src="/img/logo.jpg" alt="Logo" /></a>
                </div>
                <div class="navbar-menu" id="navbarMenu">
                    <ul class="menu" style="margin-left: -22px;">
                        <li><a href="index.php" style="font-size: 23px;">Home</a></li>
                        <li><a href="about.php" style="font-size: 23px;">About</a></li>
                        <li><a href="services.php" style="font-size: 23px;">Services</a></li>
                        <li><a href="contact.php" style="font-size: 23px;">Contact</a></li>
                    </ul>
                </div>
                <div class="navbar-toggle" id="navbarToggle">
                    <div class="toggle-icon">&#9776;</div>
                </div>
            </div>
        </nav>


        <div class="container2">
            <h1>Thank You!</h1>
            <p>We appreciate your business and value your trust.</p>

            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100093344330589" target="_blank"
                    class="fab fa-facebook"></a>
                <a href="https://twitter.com/gravitypackers" target="_blank" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/gravitypackers/" target="_blank" class="fab fa-instagram"></a>
            </div>
        </div>


        <!-- footer section start -->
        <!-- <div class="footer_section layout_padding" style="margin-top:50px">
            <div class="container">
                <div class="row d-flex justify-content-center justify-content-between">
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="address_text">ADDRESS</h4>
                        <p class="simply_text">
                            Mahadevpura Bangalore <br>
                            Phone number : 9380153945 <br>
                            E-mail: info@gravitypackersandmovers.com
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="address_text">QUICK LINKS</h4>
                        <div class="footer_menu_main">
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>

                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Follow Us</h3>
                        <div class="d-flex">
                            <a class="btn btn-lg bg-danger btn-lg-square rounded-circle me-2"
                                href="https://twitter.com/gravitypackers"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg bg-danger btn-lg-square rounded-circle me-2"
                                href="https://www.facebook.com/profile.php?id=100093344330589"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg bg-danger btn-lg-square rounded-circle me-2"
                                href="https://www.linkedin.com/company/95059790/admin/?feedType=following"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-lg bg-danger btn-lg-square rounded-circle"
                                href="https://www.instagram.com/gravitypackers/"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
        -->

        <!-- footer section end -->



        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="copyright_text">
                Copyright 2020 All Right Reserved By Gravity Packer & Movers
                Designed By
                <a href="https://rpinfocare.com/">RP Infocare</a>
            </div>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->

        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript -->
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function () {

                    $(this).addClass('transition');
                }, function () {

                    $(this).removeClass('transition');
                });
            });
        </script>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>


        <!-- formjs -->
        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var navbarToggle = document.getElementById('navbarToggle');
                var navbarMenu = document.getElementById('navbarMenu');

                navbarToggle.addEventListener('click', function () {
                    navbarToggle.classList.toggle('open');
                    navbarMenu.classList.toggle('show');
                });
            });

            window.addEventListener('resize', function () {
                var navbarToggle = document.getElementById('navbarToggle');
                var navbarMenu = document.getElementById('navbarMenu');

                if (window.innerWidth >= 768) {
                    navbarToggle.classList.remove('open');
                    navbarMenu.classList.remove('show');
                }
            });
        </script>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const movingForm = document.getElementById('moving-form');
                let position = window.innerWidth;

                function animate() {
                    if (position <
                        script -
                        movingForm
                            .offsetWidth) {
                        position = window.innerWidth;
                    }

                    position--;
                    movingForm.style.transform = `translateX(${position}px)`;
                    requestAnimationFrame(animate);
                }

                animate();
            });


            // Get the navbar-content element
            const navbarContent = document.querySelector('.navbar-content');

            // Pause the animation on hover
            navbarContent.addEventListener('mouseenter', () => {
                const movingForm = document.querySelector('#moving-form');
                movingForm.style.animationPlayState = 'paused';
            });

            // Resume the animation when hover is removed
            navbarContent.addEventListener('mouseleave', () => {
                const movingForm = document.querySelector('#moving-form');
                movingForm.style.animationPlayState = 'running';
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>