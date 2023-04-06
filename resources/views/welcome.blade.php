{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 --}}




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Studie </title>
  <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{asset('./frontend/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('./frontend/fonts/icon-font/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('./frontend/fonts/typography-font/typo.css')}}">
  <link rel="stylesheet" href="{{asset('./frontend/fonts/fontawesome-5/css/all.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{asset('./frontend/plugins/aos/aos.min.css')}}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="{{asset('./frontend/css/main.css')}}">
  <!-- Custom stylesheet -->
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
   <!--    Preloader -->
    <div id="loading">
    <div class="preloader">
     <img src="{{asset('frontend/image/preloader.gif')}}" alt="preloader">
   </div>
   </div>
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right landing-14-menu site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="#" >
              <!-- light version logo (logo must be black)-->
              <!-- <img src="image/logo/logo-black.png" alt="" class="light-version-logo"> -->
              <!-- Dark version logo (logo must be White)-->
              <!-- <img src="image/logo/logo-white.png" alt="" class="dark-version-logo"> -->
            <h1 class="display-3 text-black">Studie </h1>
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">

                <li class="nav-item">
                  <a href="#" class="nav-link-item">Courses</a>
                </li>
                <li class="nav-item">
                  <a href="https://uxtheme.net/product-support/" class="nav-link-item">Support</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btn header-btn-l-14 ms-auto d-none d-xs-inline-flex">
            {{-- <a target="_blank" class="btn btn trail-btn focus-reset" href="https://finestdevs.com/shade/">
              Start free trail
            </a> --}}
               @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Hero Area -->
    <div  class="hero-area-l-14 position-relative z-index-1 overflow-hidden" >
      <div   class="container">
        <div class="row position-relative justify-content-center">
          <div  class="col-xl-5 col-lg-6 col-md-8 col-sm-10 pr-0 " data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content">
              <h1>Your Academic Partner and counselor</h1>
              <p>creating a reliable plateform to enable all student to have have access to classification and mining of their data to successfully prediction of course of study </p>
              <a href="#" class="btn focus-reset">Try it now</a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-5 col-md-8 " data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="banner-image-l-14">
              <img src="{{asset('frontend/image/8202591_adobe_express.png')}}" alt="" class="w-100 mt-xl-n10">
            </div>
          </div>
        </div>
      </div>
      <div class="bg-shape-14" ></div>
    </div>
    <!-- Brand-area -->

    <!-- Content-Area-1 -->
    <div class="mt-5 content-area-l-14-1 position-relative">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
            <div class="h-100 section-heading-8 content text-lg-start text-center">
              <h2>Build
                Beautiful Tomorrow Today.</h2>
              <p>
                With a our reliable prediction your route to success is assured.</p>
              <a href="#" class="btn focus-reset">
                Get Started Now
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
          <div class="offset-xl-2 col-xl-6 col-lg-6 col-md-8 pl-xl-11 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
            <div class="content-img">
              <img src="{{asset('frontend/image/8202587_adobe_express (1).png')}}" alt="" class="w-100 w-xl-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content-Area-2 -->
    <div class="content-area-l-14-2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content-img pr-lg-13">
              <img src="{{asset('frontend/image/8202578_adobe_express (1).png')}}" alt="" class="w-100">
            </div>
          </div>
          <div class="col-xl-4 offset-xl-2 col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-8 text-lg-start text-center">
              <h2>
                Build Confidience All the way to the top.
              </h2>
              <p>Combineing talent and study matches the best outcome with studie.</p>
              <a href="#" class="btn focus-reset">
                Get Started Now
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Area -->
    <div class="features-area-l-14">
      <div class="container bg-shape-img-2 position-relative">
        <div class="row features-area-l-14 justify-content-center mx-0">
          <div class="col-lg-6 col-md-8 col-sm-10 px-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content-area  d-flex">
              <div class="circle-85 hover-icon">
                <img src="{{asset('frontend/image/l4/f-icon-1.png')}}" alt="">
              </div>
              <div class="content-body pl-sm-14 pl-5">
                <h5>
                 Rewrite the Narrative</h5>
                <p class="mb-0">
                  Event is not like most tech conferences.
                  We want our presentations to engage the audience, spark discussion and inspire new ideas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content-area  d-flex ">
              <div class="circle-85 hover-icon">
                <img src="{{asset('frontend/image/l4/f-icon-2.png')}}" alt="">
              </div>
              <div class="content-body">
                <h5>
                  Easy to Use</h5>
                <p class="mb-0">
                  Event is not like most tech conferences.
                  We want our presentations to engage the audience, and inspire new ideas.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-8 col-sm-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content-area  d-flex ">
              <!-- circle-85 start -->
              <div class="circle-85 hover-icon">
                <img src="{{asset('frontend/image/l4/f-icon-3.png')}}" alt="">
              </div>
              <div class="content-body">
                <h5>
                  Access From Anywhere</h5>
                <p class="mb-0">
                  Event is not like most tech conferences.
                  We want our presentations to engage the audience.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content-area  d-flex ">
              <div class="circle-85  hover-icon">
                <img src="{{asset('frontend/image/l4/f-icon-4.png')}}" alt="" />
              </div>
              <div class="content-body">
                <h5>
                 Best Predictions</h5>
                <p class="mb-0">
                  Event is not like most tech conferences.
                  We want our presentations to engage the audience, spark discussion and inspire new ideas.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing-area section -->
    <div class="pricing-area-l14 position-relative overflow-hidden z-index-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-6 col-lg-7 col-md-10 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <div class="section-heading-8">
              <h2>
               Try Studie Today</h2>
              <p>Create custom landing
                pages with Shades that convert more visitors than any website—no coding required.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- CTA Area -->
    <div class="cta-area-l-14">
      <div class="container position-relative">
        <div class="bg-shape-img-3"></div>
        <div class="row cta-area-l-14-content justify-content-center text-lg-start text-center">
          <div class="col-lg-6">
            <div class="cta-content">
              <h2 class="text-white">Ready to get started?</h2>
            </div>
          </div>
          <div class="col-lg-3 text-lg-end text-center">
            <a class="btn" href="#">Start Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Area -->
    <footer class="footer-area-l-12 position-relative">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-11 pl-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="footer-widget widget2">
                  <p>Help menu</p>
                  <ul class="widget-links pl-0 list-unstyled">
                    <li><a href="">About</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Works</a></li>
                    <li><a href="">Career</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div class="footer-widget widget3">
                  <ul class="widget-links pl-0 list-unstyled">
                    <li><a href="">Contact </a></li>
                    <li><a href="">Help & Support</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-5 col-xs-6 pl-lg-0">
                <div class="footer-widget widget4">
                  <p class="widget-title">Products</p>
                  <ul class="widget-links pl-0 list-unstyled ">
                    <li><a href="">Essential Landing Page</a></li>
                    <li><a href="">Alpha Dashboard Pro</a></li>
                    <li><a href="">Karnel Admin Dashboard</a></li>
                    <li><a href="">Gray UI Kit</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-sm-11" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="footer-subs-form-l-12">
              <p>Subscribe to our newsletter</p>
              <h6>Subscribe to get lastest offers, news and events announcements. No spam in your inbox.</h6>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your email address" aria-label="">
                <div class="input-group-append">
                  <button class="btn border-0 focus-reset" type="button">
                    <i class="icon icon-tail-right text-white"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Vendor Scripts -->
  <script src="{{asset('frontend/js/vendor.min.js')}}"></script>
  <script src="{{asset('frontend/plugins/aos/aos.min.js')}}"></script>
  <script src="{{asset('frontend/plugins/menu/menu.js')}}"></script>
  <!-- Activation Script -->
  <script>
        $(window).load(function() {
        setTimeout(function() {
            $("#loading").fadeOut(500);
        }, 1000);
        setTimeout(function() {
            $("#loading").remove();
        }, 2000);
    });
  </script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>






