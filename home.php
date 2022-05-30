<?php
include('config.php');
if(!isset($_SESSION['access_token'])){
   header('Location:Login.php');
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== COMMON ===============-->
        <meta name="theme-color" content="#089398">
        
        <meta property="og:title" content="Frides"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />

        <link rel="shortcut icon" href="public/favicon.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="common/lib/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/index3.css">

        <title><?php echo $_SESSION['name']; ?></title>
    </head>
    <body>
        <div id="preloader">
        </div>

    <div id="loaded">
        <header class="header" id="header">
            <nav class="nav container">
                <h1><a href="#" class="nav__logo">Frides</a></h1>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="http://localhost/Frides/home.php" class="nav__link active-link">Home</a>
                        </li>

                
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link">Logout</a>
                        </li>
                       
                        
                    </ul>

                    <div class="nav__dark">
                        <!--Theme Change Button-->
                        <span class="change-theme-name">Dark Mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
                </nav>
            </nav>
        </header>

        <main class="main">
            <!--============== HOME ==============-->
            <section class="home" id="home">
                <img src="assets/img/home1.jpg" alt="home-img" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        

                        <h1 class="home__data-title">
                            Welcome On Board <br/> <b> <?php echo $_SESSION['name']; ?>
                            </b>
                        </h1>

                    </div>

                    
                
                
                <script src="share.js"></script>
                <script src="https://use.fontawesome.com/8e7c028ecd.js"></script>

                    </div>
                </div>
            </section>

          
         
            <!--============== FAQ ==============-->
            <section class="place section" id="faq">
                <h2 class="section__title">What's On Your Mind?</h2>

                <div class="place__container container grid">
                    <!--============== FAQ 1 ==============-->
                    <div class="place__card">
                        <a href="http://localhost/Frides/addatrip.php" ><img src="assets/img/addatrip.jpg" alt="place" class="place__img"></a>

                        
                    </div>

                    <!--============== FAQ 2 ==============-->
                    <div class="place__card">
                        <a href="faq.html"><img src="assets/img/faq2.jpg" alt="place" class="place__img"></a>

                        
                    </div>

                    <!--============== FAQ 3 ==============-->
                    <div class="place__card">
                        <a href="faq.html"><img src="assets/img/faq3.jpg" alt="place" class="place__img"></a>

                       
                    </div>

                    <!--============== FAQ 4 ==============-->
                    <div class="place__card">
                        <a href="faq.html"><img src="assets/img/faq4.jpg" alt="place" class="place__img"></a>

                        
                    </div>

                    <!--============== FAQ 5 ==============-->
                    <div class="place__card">
                        <a href="faq.html"><img src="assets/img/faq5.jpg" alt="place" class="place__img"></a>

                        
                    </div>

                    
                </div>
            </section>

          <!--============== VIDEO ==============-->
            
                

                    

 <div class="video__content">
    <video id="video-file" preload="metadata">
    </video>

    <button class="" id="video-button">
    </button>
</div>






            

           
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Frides</h3>

                        <p class="footer__description">
                            Choose the destination <br/> pick a ride <br/> enjoy new friendships
                        </p>

                        <div class="footer__social">
                            <a href="https://wa.me/?text=Check Frides a cool initiative 127.0.0.1" data-action="share/whatsapp/share" target="_blank" class="footer__social"><i class="fa fa-whatsapp"></i></a></span>
                            <a href="https://twitter.com/intent/tweet?text=Check%20Frides%20a%20cool%20initiative%20127.0.0.1/Frides/index.html" target="_blank" class="footer__social"><i class="fa fa-twitter"></i></span></a>
                            <a href="https://telegram.me/share/url?url=127.0.0.1&text=Check%20Frides%20a%20cool%20initiative" target="_blank" class="footer__social"><i class="fa fa-telegram"></i></span></a>
                        </div>
                    </div>

                    

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Logout</h3>
                        <li class="footer__item">
                                <a href="http://127.0.0.1/Frides/logout.php" class="footer__link">See You On The Next Ride</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>

                        <ul>
                          

                           

                            <li class="footer__item">
                                <a href="http://127.0.0.1/Frides/contactus.html" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">
                        &#169; With ❤️ By Frides. All rights reserved 2022.
                    </p>

                    <div class="footer__terms">
                        <a href="http://127.0.0.1/Frides/termsandagreements.html"  class="footer__terms-link">Terms & Agreements</a>
                        <a href="http://127.0.0.1/Frides/privacypolicy.html"  class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="common/lib/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="common/lib/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/index.js"></script>
    </div>
    </body>
    <script type="text/javascript">
var preloader;

function preload(opacity) {
    if(opacity <= 0) {
        showContent();
    }
    else {
        preloader.style.opacity = opacity;
        window.setTimeout(function() { preload(opacity - 0.05) }, 100);
    }
}

function showContent() {
    preloader.style.display = 'none';
    document.getElementById('loaded').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function () {
    preloader = document.getElementById('preloader');
    preload(1);
});
    </script>
</html>
