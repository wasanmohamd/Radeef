@extends('layout')
@section('title','Registration')
@section('content')
<div class="container">
<<<<<<< HEAD
    <div class="mt-5">
    </div>
</div>
<form action="{{route('register.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width:500px">
    @csrf
    <!-- name -->
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Full Name:</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name">
        <div id="nameHelp" class="form-text">Enter your full name.</div>
    </div>
    <!-- email -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <!-- password -->
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <!-- password confirmation -->
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" id="exampleInputPassword2" name="Confirm password">
    </div>
    <button type="submit" class="btn btn-primary">Sing up</button>
</form>

</div>
@endsection
=======

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

</div>
    <form class="ms-auto me-auto mt-auto" style="width:500px" method="POST" action="{{route('register.post')}}">
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
        <button type="submit" class="btn btn-primary">Register</button>
</form>

</div>
@endsection
>>>>>>> 308c7be3ec1c6eec6c853ea99a3b8f491aef0ff2
