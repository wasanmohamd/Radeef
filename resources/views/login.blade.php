@extends('layout')
@section('title','Login')
@section('content')

<style>

body {

background-color: #f2f2f2;
font-family: "Roboto", sans-serif;
/* Set the font-family */
color: #894565;
/* Set the text color */
}

/* Apply the font and color to specific elements */
h1,
h2,
h3,
h4,
h5,
h6,
.navbar-brand,
.navbar-text,
.sidebar h5,
.note-form label,
.note-form p,
.note-form button {
font-family: 'Georgia Pro Cond Semibold', serif;
color: #894565;
}

/* Example of how to apply to specific elements */
.navbar-brand {
font-weight: bold;
/* Adjust as needed */
}

    .centered-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }
    .form-label {
        color: #894565;
    }
    .form-control:focus {
        border-color: #894565;
        box-shadow: 0 0 5px rgba(137, 69, 101, 0.5);
    }
    .input-group-text {
        background-color: #894565;
        border-color: #894565;
        color: white;
    }
    .form-control:hover {
        border-color: #894565;
    }
    .btn-primary {
        background-color: #894565;
        border: none;
    }
    .btn-primary:hover {
        background-color: #894565;
    
        }
        .btn-primary:i {
        background-color: #894565;
    
        }
</style>

<div class="container centered-form">
    <div class="form-container">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        
        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif

        <form action="{{ route('loginPost') }}" method="post">
            @csrf  
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your Email address">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your Password">
            </div>
            
            <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox"
                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
        </label>
    </div>
    <button type="submit" class="btn w-100 mt-3" style="background-color: #8B5373; color: white;">Log in</button>
    <div class="text-center mt-3" style="color: #8B5373;">
        <a href="/register" class="text-decoration-none" style="color: #8B5373;">Don't have an account?</a> 
    </div>
            
        </form>
        
    </div>
</div>
@endsection
