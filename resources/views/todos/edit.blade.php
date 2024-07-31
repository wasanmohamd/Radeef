@extends('layout')

@section('title', 'create')

@section('content')


    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 70px;
        
    }

    .card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: none;
    margin-top: 150px;
    margin-bottom: 50px;
    animation: slide-in 1s ease-in-out;
    
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
        padding: 10px;
        
    }

    .form-label {
        font-weight: bold;
        color: #5a2f4d;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #d4b8c6;
    }

    .mb-3{

        font-weight: bold;
        color: #5a2f4d; 
    }

    .btn-primary {
        background-color: #a0527a;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 5px 10px;
        margin: 5px;
        cursor: pointer;
        width: 100px; /* Set a specific width based on the reference button */
        margin-left: 17px;
        margin-bottom: 50px;
    }


    .btn-primary:hover {
        background-color: #a0527a;
        border-color: #813d5e;
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

    .btn-back{
        position: absolute;
        top: 5px;
        left: 10px;
        background-color: #d4b8c6;
        color: #e4d1dd;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        stroke: #ffffff;

        }

    
    </style>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Edit Form </div>
                    <a class="btn btn-back" href="/todos/index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                        </a>
                    <div class="card-body">
                        
                        

                                <form method="POST" action="/todos/update/{{$todo->id}}">
                                    @csrf
                                    <!-- updating not storing -->

                                    <!-- @method('PUT') -->
                                     
                                    <input type="hidden" name="todo-id" class="form-control" value="{{$todo->id}}">
                                    <div class="mb-3">
                                        <label class="form-label">task</label>
                                        <input type="text" name="title" class="form-control" value="{{$todo->title}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control" cols="5"
                                            rows="5">{{$todo->description}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">status</label>
                                        <select name="is_completed" class="form-control">
                                        <option selected value="0">In Completed</option>

                                            <option value="1">Completed</option>
                                        </select>
                                    </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection
