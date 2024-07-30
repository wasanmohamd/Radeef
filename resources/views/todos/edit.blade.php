<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> to do list </div>

                    <div class="card-body">
                        <h4>Edit Form<h4><br>
                        

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
</body>

</html>