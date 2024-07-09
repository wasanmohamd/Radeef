@extends('layout')
@section('title','Login')
@section('content')
<div class="container">

    <form class="ms-auto me-auto mt-auto" style="width:500px" method="POST" action="/register">
        @csrf
        <!-- name -->
         <div class="mb-3">
            <label for="exampleInputName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name">
            <div id="nameHelp" class="form-text">Enter your full name.</div>
          </div>
          <!-- email -->
           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!-- password -->
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <!-- password confirmation -->
         <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="Confirm password">
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
</form>

</div>
@endsection
