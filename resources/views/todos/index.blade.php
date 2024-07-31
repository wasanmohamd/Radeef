@extends('layout')

@section('title', 'create')

@section('content')

    <style>
       /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        } */

        .container {
            margin-top: 10px;
        }

        .btn-back {
        position: absolute;
        top: 20px;
        left: 10px;
        background-color: #d4b8c6;
        color: #e4d1dd;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        stroke: #ffffff;

        }


        .card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
            margin-top: 200px;
            margin-bottom: 200px;

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
            margin-top: 0px;
        }

        .card-body {
            padding: 20px;
        }

        .table {
            margin-top: 10px;
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse; /* Ensure no double borders */
        }

        .table th,
        .table td {
            text-align: center;
            padding: 8px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            border: 1px solid #ddd; /* Add consistent borders */
        }

        .table th {
            background-color: #d4b8c6;
            color: #ffffff;
            font-weight: bold;
        }

        .table td {
            background-color: #f7f5f9;
        }

        .col-title {
            width: 25%;
        }

        .col-description {
            width: 40%;
        }

        .col-completed {
            width: 25%;
        }

        .col-actions {
            width: 45%;
        }

        .btn {
            display: inline-block;
            padding: 5px 10px;
            font-size: 12px;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .btn-view {
            background-color: #C676A3;
            color: #ffffff;
        }

        .btn-edit {
            background-color: #A6678B;
            color: #ffffff;
        }

        .btn-delete {
            background-color: #a21f1f;
            color: #ffffff;
        }

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

        
        .btn-incomplete
        {

            background-color: #894565;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
        }

        .btn-success
        {

            background-color: #E4D1DD;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
        }

        .btn-taskprogress
        {

            background-color: #894565;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px 10px;
        }
        .btn-info {
    color: #ffffff;
    background-color: #894565;
    border-color: #894565;
    padding: 10px 10px;
}


.btn-info:hover {
    color: #ffffff;
    background-color: #8B5373;
    border-color: #894565;
    padding: 10px 10px;
}
        .btn-success:hover
        {

            background-color: #E4D1DD;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
        }


        form {
            display: inline-block;
        }

        h4 {
            text-align: center;
            color: #6c757d;
        }

        #svg-output {
            border: 1px solid #ccc;
            width: 100%;
            height: 500px;
            margin-top: 20px;
        }

        #error-message {
            color: red;
            display: none;
        }

        img,
        svg {
            vertical-align: middle;
        }

      


    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Tasks</div>
                    <div class="card-body">
                        @if (session()->has('alert-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('alert-success') }}
                        </div>
                        @endif

                        @if (session()->has('alert-info'))
                        <div class="alert alert-info" role="alert">
                            {{ session()->get('alert-info') }}
                        </div>
                        @endif

                        @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                        <a class="btn btn-info" href="{{route('todos.create')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                        </a>
                        <a href="{{ route('task.progress') }}" class="btn btn-taskprogress">View Task Progress</a>
                        <a class="btn btn-back" href="/landing">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                        </a>
                        <div id="error-message" class="mt-3"></div>

                        @if(count($todos) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-title">Title</th>
                                    <th class="col-description">Description</th>
                                    <th class="col-completed">Completed</th>
                                    <th class="col-actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todos as $todo)
                                <tr>
                                    <td class="text-truncate">{{ $todo->title }}</td>
                                    <td class="text-truncate">{{ $todo->description }}</td>
                                    <td>
                                        @if ($todo->is_completed==1)
                                        <a class="btn btn-sm btn-success" href="#">Completed</a>
                                        @else
                                        <a class="btn btn-sm btn-incomplete" href="#">Incomplete</a>
                                        @endif
                                    </td>
                                    <td id="outer">
                                        <a class="inner btn btn-sm btn-view" href="{{ route('todos.show', $todo->id) }}">View</a>
                                        <a class="inner btn btn-sm btn-edit" href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                                        <form method="post" action="{{route('todos.destroy')}}" class="inner">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                            <button type="submit" class="btn btn-sm btn-delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h4>No tasks available</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection