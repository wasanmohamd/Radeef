<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Radeef</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{asset('/asset/Radeeff(1).png') }}" rel="icon">
    <link href="{{ asset('assets/logo-radeef - Copy.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.cs') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Radeef ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <img src="{{ asset('assets/Radeeff(1).png') }}" alt="Radeeef" style="width: 150px;">
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#hero">Radeef</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#features">Why Radeef?</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="landing#Services" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li class="dropdown-header">Services</li>
                            <li><a class="dropdown-item" href="/todos/create">To-Do list</a></li>
                            <li><a class="dropdown-item" href="/note">Daily Notes</a></li>
                            <li><a class="dropdown-item" href="/task-progress">Task Progress</a></li>
                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#screenshots">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#team">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#contact">Support</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/technicalSupport">Admin </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#hero">Radeef</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#features">Why Radeef?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#screenshots">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#team">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/landing#contact">Support</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    @endauth
                </ul>
                @auth
                <span class="navbar-text dropdown">
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li class="dropdown-header">Account</li>
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                </span>
                @endauth

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header --> 
@yield('content')


    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">

                        <img src="{{ asset('assets/Radeeff(1).png') }}" alt="Radeeef" style="width: 300px;">

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Call Us</h4>
                        <p class="bi bi-phone"> +966 560000000</p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Send us a message</h4>
                        <p class="bi bi-envelope"> Radeef000@gmail.com</p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Follow us</h4>

                        <ul class="list-unstyled">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="credits">
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

            <!-- <link href="{{ asset('assets\logo-radeef - Copy.png') }}" rel="apple-touch-icon"> -->

<script src="{{ asset('assets\vendor\aos\aos.js') }}"></script>
<script src="{{ asset('assets\vendor\bootstrap\js\bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets\vendor\glightbox\js\glightbox.min.js') }}"></script>
<script src="{{ asset('assets\vendor\swiper\swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets\vendor\php-email-form\validate.js') }}"></script>
    
<script src="{{ asset('assets\js\main.js')}}"></script>

</body>

</html>