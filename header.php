<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Home - Directorate of Medical Education</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="static/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="static/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="static/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="static/plugins/slick/slick.css">
  <link rel="stylesheet" href="static/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="static/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="static/css/custom_style.css">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                <a title="Facebook" href="https://facebbok.com/" class="btn btn-default border-left border-right rounded-0">
                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="https://twitter.com/nhm_tn?lang=en" class="btn btn-defualt border-right rounded-0">
                    <span class="social-icon"><i class="fab fa-twitter"></i></span>
                </a>
                <a title="Instagram" href="https://instagram.com/" class="btn btn-default border-right rounded-0">
                    <span class="social-icon"><i class="fab fa-instagram"></i></span>
                </a>
                <a title="Youtube" href="https://youtube.com/" class="btn btn-default border-right rounded-0">
                    <span class="social-icon"><i class="fab fa-youtube"></i></span>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div id="date" class="mt-1 text-dark" style="font-weight:bold"></div>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-6 col-md-6 top-social text-center text-md-right">
                    <div class="resize-icons" style="">
                        
                        <button type="button" class="btn btn-default border-right rounded-0" id="decreaseFont">
                            <i class="fa fa-font"></i>-
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="defaultFont">
                            <i class="fa fa-font"></i>
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="increaseFont">
                            <i class="fa fa-font"></i>+
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="highContrast">
                            <i class="fa fa-adjust"></i>
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="normalMode">
                            <i class="fa fa-adjust" style="color:#ffb600"></i>
                        </button>
                        <span class="ml-3"><a href="screen_reader.php">Screen Reader Access</a></span>
                    </div>
               </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-1 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="static/images/tnlogo.png" alt="Tamil Nadu Maritime Board" height="70">
                </a>
            </div><!-- logo end -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                <span class="site-title">Directorate of Medical Education<br><span class="site-description">Government of Tamil Nadu</span></span>
            </div>
            <div class="col-lg-5 header-right">
                <ul class="top-info-box">
                  <!-- <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">(+9) 847-291-4353</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle"><a href="mailto:office@Constra.com">office@Constra.com</a></p>
                      </div>
                    </div>
                  </li> -->
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                          <a href="index.php" class="nav-link">Home</i></a>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about_us.php">About Department</a></li>
                            <li><a href="who_is_who.php">Who's Who</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Online Services <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="https://patientportal.oasyshealth.co/patientportal/">Patient Registration</a></li>
                            <li><a href="https://patientportal.oasyshealth.co/patientportal/login.php">OPD Registration</a></li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="help.php" class="nav-link">Help</i></a>
                      </li>
                      <li class="nav-item">
                          <a href="faqs.php" class="nav-link">FAQ's </a>
                      </li>
                      <li class="nav-item">
                          <a href="useful_links.php" class="nav-link">Useful Links</a>
                      </li>
                      <li class="nav-item">
                          <a href="gallery.php" class="nav-link">Gallery</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="contact_us.php">Contact Us</a>
                      </li>
                     </ul>
                     <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="height:35px">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                     </form>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
