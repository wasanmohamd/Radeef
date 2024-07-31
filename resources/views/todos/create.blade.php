@extends('layout')

@section('title', 'create')

@section('content')
<style>
/* body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
*/ 
       


.container {
            margin-top: 10px;
           
        } 

.card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: none;
    margin-top: 140px;
    margin-bottom:50px;
    
    
}

.card-header {
        background-color: #d4b8c6;
        color: #ffffff;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        padding: 10px;
    }



.form-label {
    font-weight: bold;
    color: #5a2f4d;
    padding: 1px;
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

.btn-back {
    position: absolute;
    top: 7px;
    left: 10px;
    color: #e4d1dd;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    stroke: #ffffff;

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
</style>

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

                    <a class="btn btn-back" href="/landing">
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