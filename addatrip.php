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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="App.css" rel="stylesheet" />

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="common/lib/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/index3.css">

        <title>Frides</title>
    </head>
    <body onload="insertText()">
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
            

          
         
            <!--============== FAQ ==============-->
            <section class="place section" id="faq">
                <h2 class="section__title">Hey <?php echo $_SESSION['name']; ?> Let's Add Your Trip</h2>

                <div class="place__container container grid">
                   

                    
                </div>
            </section>
            <div class="jumbotron">
                <div class="container-fluid">
                    <h1>Kindly Enter The Necessary Info Of Your Trip</h1>
                    <form class="form-horizontal" action="inserttrip.php" method="POST" id="form">
                        <div class="form-group">
                            <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i> Source</label>
                            <div class="col-xs-4">
                                <input type="text" id="from" placeholder="Origin" class="form-control">
                            </div>
                       </div>

                       <div class="form-group">
                        
                            <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i> Destination</label>
                            <div class="col-xs-4">
                                <input type="text" id="to" placeholder="Destination" class="form-control">
                            </div>
                          
                         </div>

                         <div class="form-group">
                        
                            <label for="tripdate" class="col-xs-2 control-label"><i class="fas fa-calendar"></i> Trip Date</label>
                            <div class="col-xs-4">
                                <input type="date" id="tripdate">
                            </div>

                         <div class="form-group">
                        
                            <label for="triptime" class="col-xs-2 control-label"><i class="fas fa-clock"></i> Trip Time</label>
                            <div class="col-xs-4">
                                <input type="time" id="triptime" list="popularHours">

                            </div>
                          
                         </div>


                         <div class="form-group">
                        
                         <label for="carbrands">What's your car brand?</label>
                         <div class="col-xs-4">
<input list="carbrand" id="carbrands" name="carbrands" placeholder="Select your car brand.." />

<datalist id="carbrand" >
    <option value="Aston Martin">
    <option value="Audi">
    <option value="BMW">
    <option value="Bentley">
    <option value="Cadillac">
    <option value="Chevrolet">
    <option value="Ferrari">
    <option value="Fiat">
    <option value="Ford">
    <option value="GMC">
    <option value="Honda">
    <option value="Hummer">
    <option value="Hyundai">
    <option value="Infiniti">
    <option value="Jaguar">
    <option value="Jeep">
    <option value="Kia">
    <option value="Lada">
    <option value="Lamborghini">
    <option value="Land Rover">
    <option value="Lexus">
    <option value="Mini">
    <option value="Maserati">
    <option value="Mazda">
    <option value="Mercedes-Benz">
    <option value="Mitsubishi">
    <option value="Nissan">
    <option value="Peugeot">
    <option value="Porsche">
    <option value="Renault">
    <option value="Seat">
    <option value="Smart">
    <option value="Subaru">
    <option value="Suziki">
    <option value="Toyota">
    <option value="Volkswagen">
    <option value="Volvo">
</datalist>
</div>     
         </div>



         <div class="form-group">
                        
                        <label for="carcolor" class="col-xs-2 control-label">Car Color</label>
                        <div class="col-xs-4">
                            <input type="text" id="carcolor" placeholder="Car color.." class="form-control">
                        </div>
                      
                     </div>


         <div class="form-group">
                        
                        <label for="capacity" class="col-xs-2 control-label">Available Seats</label>
                        <div class="col-xs-4">
                            <input type="text" id="capacity" placeholder="Number of seats" class="form-control">
                        </div>
                      
                     </div>

                     <div class="form-group">
                        
                        <label for="tripprice" class="col-xs-2 control-label">Trip Price</label>
                        <div class="col-xs-4">

                        <input type="text" id="tripprice" readonly>

                        </div>
                      
                     </div>



         <div class="form-group">
                        
                         <div class="col-xs-4">

                         <button type="submit" form="form" value="Submit"><i class="fas fa-map-signs"></i>Submit</button>
</div>
</div>
</div>
                    </form>
        
                    <div class="col-md-offset-2 col-md-20">
                        <button class="btn btn-info btn-lg " onclick="calcRoute();"><i class="fas fa-map-signs"> Get Trip's Details Before Submitting</i></button>
                    </div>
                </div>
                <div id="output">
        
                    </div>
                <div class="container-fluid">
                    <div id="googleMap">
        
                    </div>
                    
                </div>
        
            </div>
        
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAOlbZ8QnswcF5Y6LFAe0jH83syoODaNU&libraries=places"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="Scripts/jquery-3.1.1.min.js"></script>
            <script src="Main.js"></script>
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
