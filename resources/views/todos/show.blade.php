@extends('layout')

@section('title', 'create')

@section('content')
    <style>
        
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2; 
    margin: 0;
    padding: 0;
}

.container {
    margin-bottom: 10px;
    margin-top: 100px;
}

.card {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: none;
    margin-top: 200px;
    margin-bottom: 100px;
}

.card-header {
    background-color: #d4b8c6; 
    color: #ffffff;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    padding: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.card-body {
    padding: 20px;
    
}

.table {
    margin-top: 200px;
}

.table th, .table td {
    text-align: center;
    padding: 12px;
}

.table th {
    background-color: #d4b8c6; 
    color: #ffffff;
    font-weight: bold;
}

.table td {
    background-color: #f7f5f9; 
}



/* Button Styles */
.btn-success {
    background-color: #d4b8c6; 
    border-color: #6c63ff;
    border-radius: 8px;
}


/* Alert Styles */
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 8px;
    padding: 10px;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 8px;
    padding: 10px;
}

.btn-back{
        position: absolute;
        top: 12px;
        left: 10px;
        background-color: #d4b8c6;
        color: #e4d1dd;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        stroke: #ffffff;

        }

/* Form Styles */
form {
    display: inline-block;
}

#outer {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.inner {
    margin: 0 5px;
}

h4 {
    text-align: center;
    color: #6c757d;
}
</style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('task') }}</div>
                    <div class="card-body">
                        
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <a class="btn btn-back" href="/todos/index">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                           </svg> 
                        </a>

                        <b>Your Todo title is:</b> {{ $todo->title }}<br>
                        <b>Your Todo description is:</b> {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


