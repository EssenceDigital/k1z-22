<!DOCTYPE HTML>
<html class="no-js">
<head>
  <link rel="canonical" href="https://www.k1zautosales.ca">
  <!-- Basic Page Needs
    ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="Founded in Lethbridge, Alberta, we provide quality used vehicles with an exclusive credit rebuilding program.">
  <meta name="keywords" content="Lethbridge, vehicles, used cars, used vehicles, preowned, pre-owned">
  <meta name="author" content="Firestarter Digital">
  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <link rel="apple-touch-icon" sizes="57x57" href="{{ url('_site-assets/favicon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ url('_site-assets/favicon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ url('_site-assets/favicon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('_site-assets/favicon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ url('_site-assets/favicon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ url('_site-assets/favicon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ url('_site-assets/favicon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ url('_site-assets/favicon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('_site-assets/favicon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('_site-assets/favicon/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('_site-assets/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ url('_site-assets/favicon/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('_site-assets/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ url('_site-assets/favicon/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#112983">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#112983">
  <!-- CSS
    ================================================== -->
  <link href="{{ url('_site-assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="{{ url('css/ie.css') }}" media="screen" /><![endif]-->
  <link href="{{ url('_site-assets/css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
  <!-- Color Style -->
  <link href="{{ url('_site-assets/css/colors/color5.css') }}" rel="stylesheet" type="text/css">

  <script src="{{ url('_site-assets/js/modernizr.js') }}"></script><!-- Modernizr -->
  @yield('styles')

  <!-- SCRIPTS
    ================================================== -->
  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>

</head>
<body class="home header-v2">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="https://browsehappy.com/">Upgrade your browser today</a> or <a href="https://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">


<!-- Start Site Header -->
<div class="site-header-wrapper">
  <header class="site-header">
    <div class="container sp-cont">
      <div class="site-logo">
          <h1><a href="/"><img src="{{ url('_site-assets/images/k1z-logo-alt.png') }}" alt="Logo"></a></h1>
          <span class="site-tagline">Buying or Selling,<br>just got easier!</span>
      </div>
      <div class="header-right">

      </div>
    </div>
  </header> <!-- End Site Header -->
  <div class="navbar">
    <div class="container sp-cont">
      <div class="search-function">
          <span><i class="fa fa-phone"></i> Call us at <strong>403-393-6696</strong> today!
      </div>
      <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
      <!-- Main Navigation -->
      <nav class="main-navigation dd-menu toggle-menu" role="navigation">
        <ul class="sf-menu">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/inventory">Inventory</a>
          </li>
          <li><a href="/financing">Financing</a>
          </li>
          <li>
            <a href="/faqs">FAQs</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </nav>
      </div>
    </div>
 	</div>

  @yield('content')

  <!-- Start site footer -->
  <footer class="site-footer">
    <div class="site-footer-top">
      <div class="container">
        <div class="row">
        	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
            <h4 class="widgettitle">Sitemap</h4>
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/inventory">Inventory</a>
              </li>
              <li><a href="/financing">Financing</a>
              </li>
              <li>
                <a href="/faqs">FAQs</a>
              </li>
              <li>
                <a href="/contact">Contact</a>
              </li>
            </ul>
          </div>
      	  <div class="col-md-5 col-sm-6 footer_widget widget text_widget">
          	<h4 class="widgettitle">About K1Z</h4>
            <p>Founded in Lethbridge, Alberta, K1Z has quickly became a must stop in your search for quality used cars and
              trucks. Our team works hard to ensure our customers always walk away from a deal with a smile on their face. Come browse
              our huge stock of vehicles or tell us what you're looking for so we can find it for you.</p>
          </div>
          <div class="col-md-5 alt-logo">
            <img src="{{ url('_site-assets/images/k1z-alt-logo2.png') }}" alt="alternate-logo">
          </div>
        </div>
      </div>
    </div>
    <div class="site-footer-bottom">
      <div class="container">
        <div class="row">
        	<div class="col-md-6 col-sm-6 copyrights-left">
            <p>&copy; 2022 K1Z Auto Sales Ltd. All Rights Reserved</p>
          </div>
          <div class="col-md-6 col-sm-6 copyrights-right">
            <ul class="social-icons social-icons-colored pull-right">
              <li class="googleplus"><a href="https://www.google.com/maps/place/K1Z+AUTO+SALE+%26+REPAIRS/@49.700483,-112.8091548,17z/data=!4m7!3m6!1s0x0:0x162a4093be70ae1d!8m2!3d49.700483!4d-112.8069661!9m1!1b1" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End site footer -->

  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

<script src="{{ url('_site-assets/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
<script src="{{ url('_site-assets/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{ url('_site-assets/js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
<script src="{{ url('_site-assets/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
<script src="{{ url('_site-assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
<script src="{{ url('_site-assets/vendor/password-checker.js') }}"></script> <!-- Password Checker -->
<script src="{{ url('_site-assets/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ url('_site-assets/js/init.min.js') }}"></script> <!-- All Scripts -->
<script src="{{ url('_site-assets/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
@yield('scripts')

</body>
</html>
