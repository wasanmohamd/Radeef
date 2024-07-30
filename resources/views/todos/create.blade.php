@extends('layout')

@section('title', 'Create')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">To Do List</div>

                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <a class="btn btn-back" href="javascript:history.back()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                        
                    </a>

                    <form method="post" action="{{route('todos.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Task</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" cols="5" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    margin-top: 50px;
}

.card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: none;
}

.card-header {
    background-color: #d4b8c6;
    color: #ffffff;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.card-body {
    padding: 20px;
}

.form-label {
    font-weight: bold;
    color: #5a2f4d;
}

.form-control {
    border-radius: 8px;
    border: 1px solid #d4b8c6;
}

.btn-primary {
    background-color: #a0527a;
    border-color: #a0527a;
    border-radius: 8px;
}

.btn-primary:hover {
    background-color: #813d5e;
    border-color: #813d5e;
}

.btn-back{
    background-color: #a0527a;
    color: #ffffff;
    border-radius: 8px;
    border: none;
    display: inline-flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
}

.btn-back:hover {
    background-color: #813d5e;
}

.btn-exportpage {
    background-color: #6c757d;
    border-color: #6c757d;
    border-radius: 8px;
    color: #ffffff;
    margin-right: 10px;
}

.btn-exportpage:hover {
    background-color: #5a6268;
    border-color: #5a6268;
}

.btn-taskprogress {
    background-color: #28a745;
    border-color: #28a745;
    border-radius: 8px;
    color: #ffffff;
}

.btn-taskprogress:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.alert-success {
    background-color: #e2f0d9;
    color: #4f8a10;
    border: 1px solid #a1c47d;
    border-radius: 8px;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 8px;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
    background: #E4D1DD;
    padding-top: 50px;
}

.footer .footer-logo .navbar-brand {
    color: #000000;
    display: inline-block;
    float: none;
    font-family: "Philosopher", sans-serif;
    font-size: 24px;
    font-weight: 500;
    height: 100%;
    letter-spacing: 0.2em;
    padding-left: 0;
    padding-top: 0;
}

.footer .footer-logo p {
    color: #000000;
    font-size: 12px;
    letter-spacing: 1px;
}

.footer .list-menu>h4 {
    color: #8B5373;
    padding-bottom: 20px;
}

.footer .list-menu ul li a {
    color: #000000;
    font-size: 12px;
    padding-left: 5px;
    text-decoration: none;
    letter-spacing: 0;
}

.footer .copyrights {
    background: #fff;
    margin-top: 50px;
    text-align: center;
    padding: 25px;
}

.footer .copyrights p,
.footer .copyrights .credits {
    margin: 0;
    padding: 0;
    font-family: "Open Sans", sans-serif;
    font-weight: normal;
    font-size: 14px;
    letter-spacing: 0;
}

.footer .copyrights p a,
.footer .copyrights .credits a {
    letter-spacing: 0;
    color: #8B5373;
}
</style>
@endsection

<!-- ======= Footer ======= -->
@section('footer')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="footer-logo">
                    <img src="public/assets/assets/img/logo-radeef - Copy.png" alt="Radeeef" style="width: 300px;">
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-2">
                <div class="list-menu">
                    <h4>Call Us</h4>
                    <p class="bi bi-phone"> +966 560000000</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-2">
                <div class="list-menu">
                    <h4>Send us a message</h4>
                    <p class="bi bi-envelope"> Radeef@example.com</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-2">
                <div class="list-menu">
                    <h4>Follow us</h4>
                    <ul class="list-unstyled">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="credits">
                <!-- Credits and other information can go here -->
            </div>
        </div>
    </div>
    <script src="public/assets/assets/js/scripts.js"></script>
</footer>
@endsection