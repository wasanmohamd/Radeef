
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
        }

        .card {
            background-color: #e4d1dd;
            border-radius: 15px;
            border: none;
            padding: 20px;
            margin-top: 110px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            
        }

        .card-header {
            background-color: #e4d1dd;
            color: #333;
            font-size: 24px;
            font-weight: bold;
            border: none;
            padding-bottom: 0;
        }

        .card-body {
            background-color: #e4d1dd;
            padding: 10px 20px;
        }

        .progress-container {
            margin-top: 20px;
        }

        .progress-circle {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            position: relative;
        }

        .progress-circle svg {
            width: 100%;
            height: 100%;
        }

        .progress-circle .circle-bg {
            fill: none;
            stroke: #f0f0f0;
            stroke-width: 10;
        }

        .progress-circle .circle {
            fill: none;
            stroke: #a0527a;
            stroke-width: 10;
            stroke-linecap: round;
            stroke-dasharray: 283;
            stroke-dashoffset: calc(283 - (283 * {{ $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0 }}) / 100);
            transition: stroke-dashoffset 0.5s;
        }

        .progress-circle .percentage {
            font-size: 24px;
            font-weight: bold;
            fill: #a0527a;
            text-anchor: middle;
            dominant-baseline: middle;
        }

        .task-info {
            margin-top: 20px;
            background-color:  #cdb3c3;
            border: none;
            border-radius: 15px;
            padding: 15px;
            text-align: center;
        }

        .task-info p {
            margin: 5px 0;
            color: #333;
            font-weight: bold;
        }

 .btn-back{

    color: #ffff;
    border-radius: 8px;
    border: none;
    display: inline-flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    stroke: #fff;
}

    </style>
</head>

<body>
    

                        
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div id="logo">
            <img src="\assets\images\radeef.png" alt="Radeeef" style="width: 150px;">
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
                        <li><a class="dropdown-item" href="#">To-Do list</a></li>
                        <li><a class="dropdown-item" href="/note">Daily Notes</a></li>
                        <li><a class="dropdown-item" href="#">Task Progress</a></li>
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
<!-- 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Log In</a>
                </li> -->
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
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                </ul>
            </span>
            @endauth

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

                    <div class="card-header">Task Progress</div>
                    
                    <a href="{{ route('todos.index') }}" class="btn btn-back" href="javascript:history.back()"
                     style="position: absolute;  left: -5px; color: #8B5373;" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">

                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                        
                    </a>
                    <div class="card-body">
                        
                        <div class="progress-container">
                            <div class="progress-circle">
                                
                                <svg>
                                    <circle class="circle-bg" cx="50%" cy="50%" r="45%"></circle>
                                    <circle class="circle" cx="50%" cy="50%" r="45%"></circle>
                                    <text x="50%" y="50%" class="percentage">{{ $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0 }}%</text>
                                </svg>
                            </div>
                        </div>
                        <div class="task-info mt-4">
                            <p>Total Tasks: {{ $totalTasks }}</p>
                            <p>Completed Tasks: {{ $completedTasks }}</p>
                            <p>Remaining Tasks: {{ $incompleteTasks }}</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

