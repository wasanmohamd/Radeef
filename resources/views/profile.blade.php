<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .navbar-brand {
        font-weight: bold;
    }

    .navbar-text {
        margin-left: auto;
    }

    .header-logo {
        display: flex;
        align-items: left;
        justify-content: space-between;
        padding: 10px;
    }

    .navbar {
        background-color: #E4D1DD;
    }

    .navbar-nav .nav-link {
        padding: 0.5rem 1rem;
        color: #E4D1DD;
        position: relative;
    }

    .navbar-nav .nav-link:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #E4D1DD;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover:before,
    .navbar-nav .nav-link:focus:before {
        transform: scaleX(1);
    }

    .header {
        background-color: #E4D1DD;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header .logo {
        text-align: center;
    }

    .header .logo img {
        width: 150px;
    }

     .header nav {
        display: flex;
        align-items: center;
    }

    .header nav a {
        margin-left: 20px;
        text-decoration: none;
        color: #333;
    } 

    .container {
        margin: 50px auto;
        width: 60%;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

    .footer {
        background-color: #8B5373;
        color: white;
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .footer .container {
        display: flex;
        justify-content: space-between;
    }

    .footer .row {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .footer .col {
        flex: 1;
        text-align: center;
    }

    .footer .social-icon {
        color: white;
        margin: 0 10px;
    }

    .footer .social-icon i {
        font-size: 24px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="header-logo">
                <a div class="text-center" href="/">
                <img src="assets/images/logo-radeef.png" alt="Radeef" style="width: 200px; highet: 200px; margin: left; ">
                </a>
            </div>
</nav>

    <div class="container" style="max-width: 500px; margin-top: 50px;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>login success.</p>
        <hr>
        <p class="mb-0">go to your page.</p>
    </div>
    {{ session('success') }}
</div>
@elseif (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

        <h2>Account information:</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value=""placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password" name="current_password" value="" placeholder="Enter here">
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" value="" placeholder="Enter here">
            </div>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>

</body>

</html>