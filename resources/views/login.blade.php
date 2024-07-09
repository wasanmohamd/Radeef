@extends('layout')
@section('title','Login')
@section('content')
<div class="container">
<div class="mt-5">
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

<form class="ms-auto me-auto mt-auto" style="width:500px" action="{{ route('loginPost') }}" method="post">
  @csrf  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">

  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
</form>

</div>
@endsection







































<!-- login -->
<!-- <form action="/login">
@csrf for data encryption 

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Log in</button>
    </div>
</form>

 reset password 
<div>
    <a href="/reset-password" herf="/reset-password.blade.php">Reset password?</a>
</div> -->

