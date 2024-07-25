@extends('layout')
@section('title','Profile')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
    
        .container {
            margin: 50px auto;
            width: 60%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            color: #7f6780;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #7f6780;
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
            border-color: #894565;
        }
        .btn {
            background-color: #7f6780;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #6c5772;
        }
        .footer {
            background-color: #7f6780;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
        }
        .footer div {
            display: flex;
            align-items: center;
        }
        .footer div img {
            height: 20px;
            margin-right: 10px;
        }
    </style>

    <div class="container">
        <h2>Account information:</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="ALex">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="Alex1@example.com">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="********">
            </div>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
    <div class="footer">
        <div>
            <p>Call Us +966 560000000</p>
        </div>
        <div>
            <p>Send us a message User625@gmail.com</p>
        </div>
        <div>
            <a href="#"><img src="assets/images/instagram-icon.png" alt="Instagram"></a>
            <a href="#"><img src="assets/images/twitter-icon.png" alt="Twitter"></a>
        </div>
    </div>
@endsection