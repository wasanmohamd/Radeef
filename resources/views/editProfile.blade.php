<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
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
        #header #logo h1 a span {
            color: #8B5373;
        }
        #header #logo img {
            padding: 0;
            margin: 0;
        }
        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
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
        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #8B5373;
        }
        .container {
            margin: 50px auto;
            width: 60%;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-top: 200px;
        }
        .container h2 {
            color: #8B5373;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #8B5373;
        }
        .form-group input {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-error {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
        .btn {
            background-color: #8B5373;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #8B5373;
        }
    </style>
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="profile-container d-flex align-items-center justify-content-between">
            <div id="logo">
                <img src="assets/img/logo-radeef - Copy.png" alt="Radeeef" style="width: 150px;">
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="landing">Radeef</a></li>
                    <li><a class="nav-link scrollto" href="landing">Why Radeef</a></li>
                    <li><a class="nav-link scrollto" href="landing">About Us</a></li>
                    <li><a class="nav-link scrollto" href="landing">Team</a></li>
                    <ul>
                        <li><a class="nav-link scrollto" href="landing">Support</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Account Information:</h2>
        @if(session()->has('alert-success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('alert-success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" required>
                @error('current_password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password">
                @error('new_password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</body>
</html>
