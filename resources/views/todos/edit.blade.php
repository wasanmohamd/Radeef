<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 10px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: none;
        margin-top: 150px;
    }

    .card-header {
        background-color: #d4b8c6;
        color: #ffffff;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        padding: 10px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .card-body {
        padding: 20px;
    }

    .form-label {
        font-weight: bold;
        color: #5a2f4d;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #d4b8c6;
    }

    .mb-3{

        font-weight: bold;
        color: #5a2f4d; 
    }

    .btn-primary {
        background-color: #a0527a;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 5px 10px;
        margin: 5px;
        cursor: pointer;
        width: 100px; /* Set a specific width based on the reference button */
        margin-left: 17px;
        margin-bottom: 50px;
    }


    .btn-primary:hover {
        background-color: #a0527a;
        border-color: #813d5e;
    }

    .alert-success {
        background-color: #e2f0d9;
        color: #4f8a10;
        border: 1px solid #a1c47d;
        border-radius: 8px;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 8px;
    }

    .btn-back{
        position: absolute;
        top: 5px;
        left: 10px;
        background-color: #d4b8c6;
        color: #e4d1dd;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        stroke: #ffffff;

        }
       /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: #E4D1DD;
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
  color: #8B5373;
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
  color: #8B5373;
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
  color: #8B5373;
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
.arrow-button {
     
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
  color: #8B5373;
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
    </style>
</head>

<body>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Edit Form </div>
                    <a class="btn btn-back" href="/todos/index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                        </a>
                    <div class="card-body">
                        
                        

                                <form method="POST" action="/todos/update/{{$todo->id}}">
                                    @csrf
                                    <!-- updating not storing -->

                                    <!-- @method('PUT') -->
                                     
                                    <input type="hidden" name="todo-id" class="form-control" value="{{$todo->id}}">
                                    <div class="mb-3">
                                        <label class="form-label">task</label>
                                        <input type="text" name="title" class="form-control" value="{{$todo->title}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control" cols="5"
                                            rows="5">{{$todo->description}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">status</label>
                                        <select name="is_completed" class="form-control">
                                        <option selected value="0">In Completed</option>

                                            <option value="1">Completed</option>
                                        </select>
                                    </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>