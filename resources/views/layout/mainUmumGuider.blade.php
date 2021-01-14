<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
  <meta name="author" content="Inovatik">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <!-- Website Title -->
  <title>@yield('title')</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="{{asset('style/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/fontawesome-all.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/swiper.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/magnific-popup.css')}}" rel="stylesheet">

  @yield('style_navbar')

  <!-- Favicon  -->
  <link rel="icon" href="{{asset('style/images/favicon.png')}}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

  <!-- Preloader -->
  <div class="spinner-wrapper">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
  <!-- end of preloader -->


  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    {{-- <a class="navbar-brand logo-text page-scroll" href="index.html">Travel Skuy</a> --}}

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="/TourGuide"><img src="{{asset('style/images/logo.svg')}}" alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('TourGuide') ? 'active' : '' }}" href="{{ url('/TourGuide') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('TravelListGuider') ? 'active' : '' }}" href="{{ url('/TravelListGuider') }}">TRAVEL LIST</a>
        </li>
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profileGuider">
              {{ __('Profile') }}
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>

        @endguest
      </ul>
      {{-- <span class="nav-item social-icons">
        <span class="fa-stack">
          <a href="https://www.facebook.com/">
            <span class="hexagon"></span>
            <i class="fab fa-facebook-f fa-stack-1x"></i>
          </a>
        </span>
        <span class="fa-stack">
          <a href="https://twitter.com/">
            <span class="hexagon"></span>
            <i class="fab fa-twitter fa-stack-1x"></i>
          </a>
        </span>
      </span> --}}
    </div>

  </nav> <!-- end of navbar -->
  <!-- end of navbar -->


  @yield('container')


  <!-- Scripts -->
  <script src="{{asset('style/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="{{asset('style/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="{{asset('style/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
  <script src="{{asset('style/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="{{asset('style/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
  <script src="{{asset('style/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
  <script src="{{asset('style/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
  <script src="{{asset('style/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
  <script src="{{asset('style/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
  <script src="{{asset('style/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>

</html>