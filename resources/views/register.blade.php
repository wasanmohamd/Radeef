@extends('layout')
@section('title','Registration')
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

        <form method="POST" action="{{route('register.post')}}">
            @csrf
            <!-- name -->
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Enter your full name" name="name">
                <div id="nameHelp" class="form-text"></div>
            </div>

            <!-- user -->
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username:</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control" placeholder="Enter your Username" aria-label="Username"
                        aria-describedby="addon-wrapping" name="username">
                </div>
            </div>

            <!-- email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your Email address" name="email">
                <div id="emailHelp" class="form-text"></div>
            </div>

            <!-- password -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Enter your Password" pattern="^(?=.*[A-Z]).{8,}$"
                    title="Password must be at least 8 characters long and include at least one capital letter."
                    required>
                @if($errors->has('password'))
                <div class="alert alert-danger">{{$errors->first('password')}}</div>
                @endif
            </div>

            <!-- password confirmation -->
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation"
                    placeholder="Enter your Confirm Password">
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #894565; border-color: #894565;">Sign
                up</button>
        </form>
    </div>
</div>
@endsection