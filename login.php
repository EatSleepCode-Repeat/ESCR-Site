<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"/>
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

    <header class="s-header">

        <div class="header-logo">
            <a style="width:85%" class="site-logo" href="index.html">
                <img src="images/escrLogoBanner.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Menu</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll" href="#clients" title="clients">Partners & Clients</a></li>
                    <li><a href="/careers.html" title="careers">Careers</a></li>
                    <li><a href="https://paste.escrcreativestudios.co.uk/">Our Pastebin</a></li>
                    <li><a href="https://qna.escrcreativestudios.co.uk/">Questions & Answers</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact Us</a></li>
                </ul>
                <!--
                <div style="margin-top: -120px" class="home-content__buttons">
                    <a href="login.php" class="btn btn--stroke">
                        Login
                    </a>
                    <a href="registration.php" class="btn btn--stroke">
                        Register
                    </a>
                </div>
                -->
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/ESCR-Creative-Studios-Ltd-108875491934355/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/EscrLtd"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    
                </ul>
<div class="copyright">
                    <span>© Copyright ESCR Creative Studios Ltd 2022</span>
                </div>
            </div>


            <!--<div class="home-content__buttons">
                    <a href="login.php" class="smoothscroll btn btn--stroke">
                        Sign In
                    </a>
                    <a href="#" class="smoothscroll btn btn--stroke">
                        Register
                    </a>
            </div>
            <!-- <div style="padding-top: 10px">
                <button>Sign In</button>
                <button>Register</button>
            </div> -->
            
            <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->
    
    <p style="margin-top: 150px; color: #000000">LOGIN FORM</p>

<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">No Account? Register Here</a></p>
  </form>
<?php
    }
?>
<section style="background: black;" id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 style="margin-left: 10px;margin-right: 10px;" class="display-2 display-2–light">Reach out for a new project or just say a nice hello</h1>
            </div>
        </div>

        <div style="margin-left: 0px; margin-right: 0px;" class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <!--<div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            1600 Amphitheatre Parkway<br>
                            Mountain View, CA<br>
                            94043 US
                        </p>
                    </div> -->

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            support@escrcreativestudios.co.uk<br>
                        </p>
                    </div>
                    
                    <div class="cinfo">
                        <h5>Join Our Discord Server At</h5>
                        <p>
                            <a href="https://discord.gg/f4G22YrtzK"><img src="/images/discordBanner.gif"></a>
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/ESCR-Creative-Studios-Ltd-108875491934355/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/EscrLtd"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                <p style="color: white; text-align: center;">We are a creative team
                    who design and develop websites and strategies
                    for influential brands and
                    start ups alike.</p>

            </div>
            
        
           <div class="col-six tab-full right footer-subscribe">

                <h4 style="color: white;">Get Notified</h4>
                <p style="color: white;">If you want to receive news and maybe even a cheeky discount code for our services, feel free to subscribe to be notified via email.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input style="color: white"type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Coming Soon..." required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span style="color: white;">© Copyright ESCR Creative Studios Ltd 2022</span>
                </div>
                <div class="copyright">
                    <a href="/privacy.html"><span>Privacy</span></a>
                </div>
                <div class="copyright">
                    <a href="/careers.html"><span>Careers</span></a>
                </div>
                <div class="copyright">
                    <a href="/cookies.html"><span>Cookies Policy</span></a>
                </div>
                
                
                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61dc6397b84f7301d32a49d9/1fp2ea20d';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>