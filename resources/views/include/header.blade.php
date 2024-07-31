<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/images/Styles.css') }}">
      <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
    rel="stylesheet">
<style>
/*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  #header {
    background: #fff;
    z-index: 997;
    transition: all 0.5s ease;
    padding: 20px 0;
  }
  
  #header #logo h1 {
    color: #505050;
    font-size: 28px;
    font-weight: 600;
    letter-spacing: 1px;
    margin: 0;
  }
  
  #header #logo h1 a {
    color: #555;
    display: inline-block;
    text-decoration: none;
  }
  
  #header #logo h1 a span {
    color: #71c55d;
  }
  
  #header #logo img {
    padding: 0;
    margin: 0;
  }
  
  #header.header-scrolled {
    background: #fff;
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
    padding: 12px 0;
  }

  /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
  /**
  * Desktop Navigation 
  */
  .navbar {
    padding: 0;
  }
  
  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  
  .navbar li {
    position: relative;
  }
  
  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 30px;
    font-family: "Roboto", sans-serif;
    font-size: 15px;
    color: #222;
    white-space: nowrap;
    transition: 0.3s;
    letter-spacing: 0;
  }
  
  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }
  
  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #894565;
  }
  
  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 14px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
  }
  
  .navbar .dropdown ul li {
    min-width: 200px;
  }
  
  .navbar .dropdown ul a {
    padding: 10px 20px;
    text-transform: none;
  }
  
  .navbar .dropdown ul a i {
    font-size: 12px;
  }
  
  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: #894565;
    font-family: "Roboto", sans-serif;

  }
  
  .navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }
  
  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }
  
  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
  
  @media (max-width: 1366px) {
    .navbar .dropdown .dropdown ul {
      left: -90%;
    }
  
    .navbar .dropdown .dropdown:hover>ul {
      left: -100%;
    }
  }
  
  /**
  * Mobile Navigation 
  */
  .mobile-nav-toggle {
    color: #222;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
  }
  
  .mobile-nav-toggle.bi-x {
    color: #fff;
  }
  
  @media (max-width: 991px) {
    .mobile-nav-toggle {
      display: block;
    }
  
    .navbar ul {
      display: none;
    }
  }
  
  .navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(34, 34, 34, 0.9);
    transition: 0.3s;
    z-index: 999;
  }
  
  .navbar-mobile .mobile-nav-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
  }
  
  .navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    border-radius: 6px;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
  }
  
  .navbar-mobile a,
  .navbar-mobile a:focus {
    padding: 10px 20px;
    font-size: 15px;
    color: #222;
  }
  
  .navbar-mobile a:hover,
  .navbar-mobile .active,
  .navbar-mobile li:hover>a {
    color: #71c55d;
  }
  
  .navbar-mobile .getstarted,
  .navbar-mobile .getstarted:focus {
    margin: 15px;
  }
  
  .navbar-mobile .dropdown ul {
    position: static;
    display: none;
    margin: 10px 20px;
    padding: 10px 0;
    z-index: 99;
    opacity: 1;
    visibility: visible;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  }
  
  .navbar-mobile .dropdown ul li {
    min-width: 200px;
  }
  
  .navbar-mobile .dropdown ul a {
    padding: 10px 20px;
  }
  
  .navbar-mobile .dropdown ul a i {
    font-size: 12px;
  }
  
  .navbar-mobile .dropdown ul a:hover,
  .navbar-mobile .dropdown ul .active:hover,
  .navbar-mobile .dropdown ul li:hover>a {
    color: #71c55d;
  }
  
  .navbar-mobile .dropdown>.dropdown-active {
    display: block;
  }


</style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="header-logo">
                <a class="navbar-brand" href="/landing">
                    <img src="assets/radeeff(1).png" alt="Radeef" style="width: 150px; height: auto;">
                </a>

            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#hero">Radeef</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#why">Why radeef?</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li class="dropdown-header">Services</li>
                            <li><a class="dropdown-item" href="/create">To-Do list</a></li>
                            <li><a class="dropdown-item" href="/note">Daily Notes</a></li>
                            <li><a class="dropdown-item" href="/task">Task Progress</a></li>
                        </ul>
                        
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#about">About us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#team">Team</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#contact">Support</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#hero">Radeef</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#why">Why Radeef?</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#about">About us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#team">Team</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/landing#contact">Support</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registration</a>
                    </li>
                   
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endauth
                </ul>
                @auth
                <span class="navbar-text dropdown" >
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown"  >
                        <li class="dropdown-header">Account</li>
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </span>
                @endauth
            </div>
        </div>
    </nav>
</body>

</html>