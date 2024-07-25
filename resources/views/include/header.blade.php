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
                            <li><a class="dropdown-item" href="#">To-Do list</a></li>
                            <li><a class="dropdown-item" href="/note">Daily Notes</a></li>
                            <li><a class="dropdown-item" href="#">Task Progress</a></li>
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