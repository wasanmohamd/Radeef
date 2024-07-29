<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Support Inquiries</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .container 
    {
        width: 80%;
        margin: 30px auto;
        padding: 20px;
        border-radius: 8px;
        
    }

    h1 {
        color: #a0527a;
        text-align: center;
        margin-bottom: 20px;
       }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        color: #333;
        table-layout: fixed;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        color: #333;
        word-wrap: break-word;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn-export,
    .btn-email {
        display: inline-block;
        padding: 8px 7px;
        margin-top: 20px;
        background-color: #a0527a;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .btn-export:hover,
    .btn-email:hover {
        background-color: #8d3d5e;
    }

    .btn-export {
        margin-left: 10px;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a,
    .pagination span {
        color: #a0527a;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color 0.3s;
        border: 1px solid #ddd;
        margin: 0 4px;
        border-radius: 4px;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination .active {
        background-color: #a0527a;
        color: white;
        border: 1px solid #a0527a;
    }

    .pagination .disabled {
        color: #ccc;
        pointer-events: none;
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
  margin: 5px;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
  margin-bottom:50px;
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
        <h1>Technical Support Inquiries</h1>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Ticket</th>
                    <th>Inquiry</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->ticket }}</td>
                    <td>{{ $inquiry->inquiry }}</td>
                    <td>{{ $inquiry->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        @if ($inquiry->status == 0)
                        open
                        @else
                        close
                        @endif

                    </td>
                    <td>
                        <a href="{{ route('writingpage.email', $inquiry->id) }}" class="btn-email">Send Email</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links -->
        <div class="pagination">

        {{$inquiries->links("pagination::bootstrap-4")}}
           
        </div>
    </div>
</body>
</html>
