<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mick</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <!-- Template css Files -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/skins/red.css" type="text/css">

  <!-- Live Style Switcher -->
  <link rel="stylesheet" class="alternate-style" title="red" href="css/skins/red.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="purple" href="css/skins/purple.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="orange" href="css/skins/orange.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="yellow" href="css/skins/yellow.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="green" href="css/skins/green.css" type="text/css" disabled>
  <link rel="stylesheet" href="css/styleSwitcher.css" type="text/css">
  <script src="https://kit.fontawesome.com/bea2eaf9dc.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="dark">
    <div class="preloader">
        <div class="loader">
        </div>
    </div>
<script>
window.onload = function() {
    setTimeout(function() {
        $("section").removeClass("hiddensec");
    }, 1000);
};

</script>
    <div class="main-container">
        <div class="aside">
            <div class="nav-toggler">
                <span></span>
            </div>
            <div class="aside-inner">
                <div class="logo">
                    <a href="https://mickschmidt.nl/">Mick</a>
                </div>

                <!-- Nav -->
                <ul class="nav">
                    <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
                    <li><a href="#projects"><i class="fa fa-list"></i> Projects</a></li>
                    <li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
                    <li><a href="/" style="pointer-events: none; cursor: default;"><i class="fa fa-eye"></i><span id="viewCount">Loading...</span></a></li>
                </ul>
                <div class="copyright">
                    &copy; 2023 All Rights Reserved By Mick
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">

            <!-- Home Section -->
            <section class="home section active" id="home">
                <div class="container">
                    <div class="intro">
                        <img src="images/Mick.jpeg" alt="PFP" class="shadow-dark">
                        <h1>Mick</h1>
                        <p>Socials</p>
                        <div class="social-links">
                            <a href="https://discordapp.com/users/382086165538537473" target="_blank"><i class="fab fa-discord"></i></a>
                            <a href="https://www.instagram.com/lololomick/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://open.spotify.com/user/lololomick" target="_blank"><i class="fa fa-spotify"></i></a>
                            <a href="https://github.com/lololomick" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home section End -->

            <!-- About Section -->
            <section class="about section hiddensec" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h2>I'm Mick, <span>here is some info about me</span></h2>
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Website : <span>www.mickschmidt.nl</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>19</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Webshop : <span><a class="webshoplink" href="webshop">Klik hier</a></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>info@mickschmidt.nl</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Country : <span>Netherlands</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Spoken Language : <span>Dutch / English</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="https://www.paypal.com/paypalme/lololomick" target="_blank" data-section-index="0" class="btn hire-me">Support Me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    <!-- About Section End -->

    <!-- Service Section  -->
    <section class="projects section hiddensec" id="projects">
        <div class="container"> 
            <div class="row">
                <div class="section-title padd-15">
                    <h2>Projects</h2>
                </div>
            </div>
            <div class="row">
                <!-- Service Item -->
                <a href="portfolio" class="projects-item padd-15">
                    <div class="projects-item-inner">
                        <div class="icon"><i class="fa fa-diamond"></i></div>
                        <h4>School</h4>
                        <p>My portfolio made for school.</p>
                    </div>
                </a>
                <!-- Service Item Ended -->
                <!-- Service Item -->
                <a href="https://discord.gg/PAZ8JNZeGC" target="_blank" class="projects-item padd-15">
                    <div class="projects-item-inner">
                        <div class="icon"><i class="fa fa-terminal"></i></div>
                        <h4>Elixir</h4>
                        <p>Elixir Discord bot made with python for the Elixir Discord server.</p>
                    </div>
                </a>
                <!-- Service Item Ended -->
                <!-- Service Item -->
                <a href="https://www.fumble.nl/" target="_blank" class="projects-item padd-15">
                    <div class="projects-item-inner">
                        <div class="icon"><i class="fa fa-gift"></i></div>
                        <h4>Fumble</h4>
                        <p>Fumble website made to learn html and css.</p>
                    </div>
                </a>
                <!-- Service Item Ended -->
                <!-- Service Item -->
                <a href="/" style="pointer-events: none; cursor: default;" target="_blank" class="projects-item padd-15">
                    <div class="projects-item-inner">
                        <div class="icon"><i class="fa fa-file"></i></div>
                        <h4>Comming soon</h4>
                        <p>Comming soon.</p>
                    </div>
                </a>
                <!-- Service Item Ended -->
                <!-- Service Item -->
                <a href="/" style="pointer-events: none; cursor: default;" target="_blank" class="projects-item padd-15">
                    <div class="projects-item-inner">
                        <div class="icon"><i class="fa fa-file"></i></div>
                        <h4>Comming soon</h4>
                        <p>Comming soon.</p>
                    </div>
                </a>
                <!-- Service Item Ended -->
            </div>
        </div>
    </section>
    <!-- Service Section Ended -->
    <!-- Contact Section -->
    <section class="contact hiddensec section" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row">
                <!-- contact-info-item -->
                <div class="contact-info-item padd-15">
                    <div class="icon"><i class="fab fa-discord fa"></i></div>
                    <h4>Discord</h4>
                    <p>lololomick</p>
                </div>
                <!-- contact-info-item Ended -->
                <!-- contact-info-item -->
                <div class="contact-info-item padd-15">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <h4>Phone</h4>
                    <p>Unavailable</p>
                </div>
                <!-- contact-info-item Ended -->
                <!-- contact-info-item -->
                <div class="contact-info-item padd-15">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <h4>Email</h4>
                    <p>lololomick@gmail.com</p>
                </div>
                <!-- contact-info-item Ended -->
            </div>
            <!-- Contact Form -->
            <div class="row">
                <form id="contactForm" action="https://formspree.io/f/xqkvlzzj" method="POST" class="contact-form padd-15">
                    <div class="row">
                        <div class="form-item col-6 padd-15">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name*">
                            </div>
                        </div>
                        <div class="form-item col-6 padd-15">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message*"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 padd-15">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </div>
                    <input type="hidden" name="subject" value="New submission from {{email}}">
                </form>
            </div>

            <!-- Contact Form Ended -->
        </div>
    </section>
    </div>
    <!-- Main Content End -->

    </div>
    <!-- Main Container End-->

    <!-- Live Style Switcher -->
<div class="style-switcher">
    <div class="toggle-style-switcher">
      <i class="fa fa-cog fa-spin"></i>
    </div>
    <h4>Style Switcher</h4>
    <ul>
      <li><a href="javascript:void(0);" title="red" style="background-color: #ec1839;"
          onclick="setActiveStyle('red')"></a></li>
      <li><a href="javascript:void(0);" title="purple" style="background-color: #4821f3;"
          onclick="setActiveStyle('purple')"></a></li>
      <li><a href="javascript:void(0);" title="orange" style="background-color: #fa5b0f;"
          onclick="setActiveStyle('orange')"></a></li>
      <li><a href="javascript:void(0);" title="yellow" style="background-color: #ffb400;"
          onclick="setActiveStyle('yellow')"></a></li>
      <li><a href="javascript:void(0);" title="green" style="background-color: #72b626;"
          onclick="setActiveStyle('green')"></a></li>
    </ul>
    <h5>Body Screen</h5>
    <label>
      <input type="radio" class="body-skin" name="body-style" value="light">
      Light
    </label>
    <label>
      <input type="radio" class="body-skin" name="body-style" value="dark" checked="true">
      Dark
    </label>
  </div>
    <!-- Live Style Switcher End -->

    <!-- Template Js -->
    <script src="js/script.js"></script>

    <!-- Live Style Switcher JavaScript-->
    <script src="js/styleSwitcher.js"></script>
</body>

</html>