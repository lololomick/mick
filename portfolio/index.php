<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/favicon.ico" type="../image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
  <link rel="../icon" type="../image/png" sizes="32x32" href="../images/favicon-32x32.png">
  <link rel="../icon" type="../image/png" sizes="16x16" href="../images/favicon-16x16.png">
  <!-- Template css Files -->
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/skins/red.css" type="text/css">
  <!-- Live Style Switcher -->
  <link rel="stylesheet" class="alternate-style" title="red" href="../css/skins/red.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="purple" href="../css/skins/purple.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="orange" href="../css/skins/orange.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="yellow" href="../css/skins/yellow.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="green" href="../css/skins/green.css" type="text/css" disabled>
  <link rel="stylesheet" href="../css/styleSwitcher.css" type="text/css">
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
                    <li><a href="http://mickschmidt.nl"><i class="fa fa-home"></i> Terug naar home</a></li>
                    <li><a href="#periode1"><i class="fa-solid fa-newspaper"></i> Periode 1</a></li>
                    <li><a href="periode2"><i class="fa-solid fa-newspaper"></i> Periode 2</a></li>
                    <li><a href="periode3"><i class="fa-solid fa-newspaper"></i> Periode 3</a></li>
                    <li><a href="periode4"><i class="fa-solid fa-newspaper"></i> Periode 4</a></li>
                </ul>
                <div class="copyright">
                    &copy; 2023 All Rights Reserved By Mick
                </div>
            </div>
        </div>
        <div class="main-content">
            <section class="home section active" id="home">
                <div class="container">
                    <div class="intro">
                        <img src="../images/Mick.jpeg" alt="PFP" class="shadow-dark">
                        <h1>Portfolio</h1>
                        <p>Mick</p>
                    </div>
                </div>
            </section>
            <section class="home section hiddensec" id="periode1">
                <div class="container">
                    <div class="intro">
                        <img src="images/Mick.jpeg" alt="PFP" class="shadow-dark">
                        <h1>Mick</h1>
                        <p>Socials</p>
                        <div class="social-links">
                            <a href="" target="_blank"><i class="fab fa-discord"></i></a>
                            <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fa fa-spotify"></i></a>
                            <a href="" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Live Style Switcher -->
    <div class="style-switcher">
    <div class="toggle-style-switcher">
      <i class="fa fa-cog fa-spin"></i>
    </div>
    <h4>Style Switcher</h4>
    <ul>
      <li><a href="javascript:void(0);" title="red" style="background-color: #ec1839;"
          onclick="setActiveStyle('red')"></a></li>/'/'10
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
    <script src="../js/script.js"></script>

    <!-- Live Style Switcher JavaScript-->
    <script src="../js/styleSwitcher.js"></script>
</body>

</html>