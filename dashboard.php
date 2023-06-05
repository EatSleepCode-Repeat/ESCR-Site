<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ESCR Creative Studios | Client Area</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
</head>
<body id="top">
<script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette1",Theme:"edgeless",Mode:"banner bottom",Time:"5",})</script>
<style>
    .home-content__buttons {
        display: flex;
        margin: 0 auto;
        justify-content: center;
    }
</style>

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a style="width:50%" class="site-logo" href="index.html">
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
                    <a href="#contact" class="btn btn--stroke">
                        My Profile
                    </a>
                    <a href="logout.php" class="btn btn--stroke">
                        Logout
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


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/heroBg.jpg" data-natural-width=300 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1 style="text-align: center;">Welcome to the Client Area!</h1>

                <h3>You are now Logged In, <?php echo $_SESSION['username']; ?></h3>

                <div class="home-content__buttons">
                    <a href="#" class="btn btn--stroke">
                        My Profile
                    </a>
                    <a href="https://portfolios.escrcreativestudios.co.uk/" class="smoothscroll btn btn--stroke">
                        My Portfolio
                    </a>
                    <!--
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                    <a href="testimonials.html" class="btn btn--stroke">
                        Our Testimonials
                    </a>
                    -->
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Keep Scrolling...</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> 

<!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/ESCR-Creative-Studios-Ltd-108875491934355/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/EscrLtd"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-github" aria-hidden="true"></i><span>Github</span></a>
            </li>
        </ul> 
        <!-- end home-social -->


    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1–light">We Are ESCR Creative Studios</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Mission Statement</h3>
                <br>
                <p>
                    Develop high quality and affordable web solutions that enable clients to establish presence online, increase profitability, and continually improve productivity. 
                </p>
                <h3 class="subhead subhead--dark">Our Motto</h3>
                <br>
                <p>Create Always. Think All Ways.</p>

            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">1</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1283</div>
                <h5>Cups of Coffee</h5>
            </div>
               
            <div class="col-block stats__col">
                <div class="stats__count">287</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">350</div>
                <h5>Happy Clients</h5> 
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-2">We’ve got everything you need to launch or grow your business</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Brand Identity</h3>
                    <p>Brand identity is made up of what your brand says, what your values are, how you communicate your product, and what you want people to feel when they interact with your company. Essentially, your brand identity is the personality of your business and a promise to your customers.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Illustration</h3>
                    <p>Illustrations are a visual way to portray or illustrate a written text. They might help explain an idea or tell a story or provide decoration. We can help you with this!
                    </p>
                </div>
                
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Web Design</h3>
                    <p>We work on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. A good web design is easy to use, aesthetically pleasing, and suits the user group and brand of the website. 
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Web Development</h3>
                    <p>We don't only do web markup and coding, we also do all manner of website development which includes all related development tasks, such as client-side scripting, server-side scripting, server and network security configuration, eCommerce development, and content management system (CMS) development.
                    </p>
                </div>
            </div>
            
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Software Engineering</h3>
                    <p>We’ll help define your digital product strategy by understanding your business goals and the value you want to deliver for your customers. We will then work on all aspects of the design process from visual identity, through to UX and UI designs. Finally we will get your project up and running!
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
     <!--
     <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Works</h3>
                    <h1 class="display-2 display-2–light">We love what we do, check out some of our latest works</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

      <!--  <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/lady-shutterbug.jpg" 
                                         srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick 

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="images/portfolio/woodcraft.jpg" 
                                         srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick 
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/the-beetle.jpg"
                                         srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick 
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-grow-green.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="images/portfolio/grow-green.jpg" 
                                         srcset="images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick 

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-guitarist.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/guitarist.jpg" 
                                         srcset="images/portfolio/guitarist.jpg 1x, images/portfolio/guitarist@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick 
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-palmeira.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="images/portfolio/palmeira.jpg"
                                         srcset="images/portfolio/palmeira.jpg 1x, images/portfolio/palmeira@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick 

                </div> <!-- end masonry 
            </div> <!-- end col-full 
        </div> <!-- end works-content 

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Partners</h3>
                <h1 class="display-2">ESCR Creative Studios is honoured to be
                partnered with these companies</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="https://www.shopify.co.uk" title="" class="clients__slide"><img src="images/clients/shopifyLogo.png" /></a>
                    <a href="https://www.visualsoft.co.uk" title="" class="clients__slide"><img src="images/clients/vsGrey.png" /></a>
                    <a href="https://business.adobe.com/products/magento/magento-commerce.html" title="" class="clients__slide"><img src="images/clients/magentoLogo.png" /></a>
                   <a href="https://www.sparkedhost.com" title="" class="clients__slide"><img src="images/clients/sparkedLogo.png" /></a>
                   <a href="https://www.kzxengine.com" title="" class="clients__slide"><img src="images/clients/kzxEngineLogo.png" /></a>
                   <a href="https://www.granddogstudio.com" title="" class="clients__slide"><img src="images/clients/grandDogStudioLogo.png" /></a>
                     
                </div>
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-2">ESCR Creative Studios has been honoured to
                work with these clients in the past</h1>
            </div>
        </div> 
        
        <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="https://www.apple.com" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                    <a href="https://atom.io/" title="" class="clients__slide"><img src="images/clients/atom.png" /></a>
                    <a href="https://www.blackberry.com/us/en" title="" class="clients__slide"><img src="images/clients/blackberry.png" /></a>
                    <a href="https://www.dropbox.com" title="" class="clients__slide"><img src="images/clients/dropbox.png" /></a>
                    <a href="https://elements.envato.com" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="https://www.mozilla.org/en-GB/firefox/new/" title="" class="clients__slide"><img src="images/clients/firefox.png" /></a>
                    <a href="https://www.joomla.org/" title="" class="clients__slide"><img src="images/clients/joomla.png" /></a>
                    <a href="https://business.adobe.com/products/magento/magento-commerce.html" title="" class="clients__slide"><img src="images/clients/magento.png" /></a>
                     
                </div>

        <!-- end clients -->
            </div>
            <!-- end col-full -->
        </div>
            <!--
            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Meet The Team</h3>
                    <h1 class="display-2">Here are the faces behind the magic!</h1>
                </div>
                
            </div> 
            
            <div class="profileCard">
                <img src="/images/chrisProfileImg.jpeg" alt="Chris" style="width:100%">
                <h1 class="h1Name">Chris</h1>
                <p class="cardTitle">CEO & Founder</p>
                <p>Full Stack Developer <br> and Software Engineer</p>
                <p><a href="mailto:chris@escrcreativestudios.co.uk"><button class="contactMeButton">Contact Me</button></a></p>
            </div>
            -->
            
        
        <!-- end clients-outer -->
<!--
        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>My new site is so much faster and easier to work with than my old site. It used to take me an hour or more to update a page and I would still sometimes screw things up.

Now it’s almost like having a personal design team right here with me.

Thanks Guys!</p>
                        <div class="testimonials__info">
                            <span class="testimonials__name">Jim</span> 
                            <span class="testimonials__pos">Veggie are Us</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Chris and the guys helped us totally overhaul our website earlier this year. The whole process was painless and they came up with some excellent ideas with very little input from ourselves. Would happily recommend them to anyone thinking about either getting a website or refreshing an existing one.</p>

                        
                        <div class="testimonials__info">
                            <span class="testimonials__name">Simon</span> 
                            <span class="testimonials__pos">Outsourced IT</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>First class web design service, I cannot recommend them highly enough. They clearly understood what I was looking for and interpreted my brief precisely. They have an excellent structure for getting all the information from the client which takes away a lot of stress and makes the process easy. I now have another site I want to create and I won't be going anywhere else!</p>

                        <div class="testimonials__info">
                            <span class="testimonials__name">Sarah</span> 
                            <span class="testimonials__pos">Gorilla Warfare</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->

    <!-- contact
    ================================================== -->
    <section style="background: black;" id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 style="margin-left: 10px;margin-right: 10px;" class="display-2 display-2–light">Reach out for a new project or just say a nice hello</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
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