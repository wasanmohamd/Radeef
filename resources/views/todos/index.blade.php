@extends('layout')

@section('title', 'To Do List')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
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
            margin-top: 20px;
            table-layout: fixed;
            width: 100%;
        }

        .table th,
        .table td {
            text-align: center;
            padding: 8px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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
            width: 20%;
        }

        .col-description {
            width: 35%;
        }

        .col-completed {
            width: 20%;
        }

        .col-actions {
            width: 25%;
        }

        .btn-info {
            background-color: #a0527a;
            color: #ffffff;
            border-radius: 8px;
        }

        .btn-info:hover {
            background-color: #a0527a;
        }

        .btn-success {
            background-color: #d4b8c6;
            color: #ffffff;
            border-radius: 8px;
        }

        .btn-success:hover {
            background-color: #d4b8c6;
        }

        .btn-incomplete {
            background-color: #a0527a;
            color: #ffffff;
            border-radius: 8px;
        }

        .btn-view {
            background-color: #C676A3;
            color: #ffffff;
            border-radius: 8px;
            padding: 3px 8px;
            font-size: 12px;
        }

        .btn-edit {
            background-color: #A6678B;
            color: #ffffff;
            border-radius: 8px;
            padding: 3px 8px;
            font-size: 12px;
        }

        .btn-delete {
            background-color: #a21f1f;
            color: #ffffff;
            border-radius: 8px;
            padding: 3px 8px;
            font-size: 12px;
        }

        .btn-exportpage {
            background-color: #a0527a;
            color: #ffffff;
            border-radius: 8px;
        }

        .btn-taskprogress {
            background-color: #a0527a;
            color: #ffffff;
            border-radius: 8px;
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

        form {
            display: inline-block;
        }

        #outer {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .inner {
            margin: 0 2px;
            flex-grow: 1;
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
    </style>
</head>

<body>
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
                        <a class="btn btn-sm btn-info" href="{{route('todos.create')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                        </a>

                        <a href="{{ route('todos.export_to_svg') }}" class="btn btn-exportpage">
                        Export to SVG
                        </a>
                        
                        <a href="{{ route('task.progress') }}" class="btn btn-taskprogress">View Task Progress</a>
                        
                        <div id="error-message" class="mt-3"></div>
                        <!-- <svg id="svg-output"></svg> -->

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

    <script>
        document.getElementById('export-svg-btn').addEventListener('click', function() {
            fetch('{{ route('todos.export_to_svg') }}')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(svgData => {
                    document.getElementById('svg-output').innerHTML = svgData;
                    document.getElementById('error-message').style.display = 'none';
                })
                .catch(error => {
                    document.getElementById('error-message').textContent = 'Error: ' + error.message;
                    document.getElementById('error-message').style.display = 'block';
                });
        });
    </script>
</body>

</html>
@endsection