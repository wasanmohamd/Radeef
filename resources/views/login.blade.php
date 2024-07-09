@extends('layout')
@section('title', 'login')
@section('content')
<div class="container-fluid" style="background-color: #E4D1DD; padding: 20px 0;">
    <div class="text-center">
        <img src="assets/images/logo-radeef.png" alt="Radeeef" style="width: 150px;">
    </div>
</div>
<div class="container" style="max-width: 500px; margin-top: 50px;">
    <form action="{{route ('login.post')}}" method="Post" class="ms-auto me-auto mt-auto">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your Email"
                style="background-color: #D9D9D9;">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your Password"
                style="background-color: #D9D9D9;">
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
            <a href="#" class="text-decoration-none" style="color: #8B5373;">Dont have an account?</a> |
            <a href="#" class="text-decoration-none" style="color: #8B5373;">Forgot your password?</a>
        </div>
    </form>
</div>
@endsection