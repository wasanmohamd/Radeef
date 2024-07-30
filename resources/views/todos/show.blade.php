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

.btn-info {
    background-color: #a0527a; 
    border-color: #e0aaff;
    color: #ffffff;
    border-radius: 8px;
}

.btn-view {
    background-color: #C676A3; 
    border-color: #a085b5;
    color: #ffffff;
    border-radius: 8px;
}

.btn-edit {
    background-color: #A6678B; 
    border-color: #6c63ff;
    color: #ffffff;
    border-radius: 8px;
}

.btn-delete {
    background-color: #a21f1f; /* Red */
    border-color: #dc3545;
    color: #ffffff;
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
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <a href=" {{url()->previous() }}" class="btn btn-sm btn-info" >Go Back</a><br>
                        <b>Your Todo title is:</b> {{ $todo->title }}<br>
                        <b>Your Todo description is:</b> {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<!-- <!DOCTYPE html>
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

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{__('dashboard')}}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
       
    <b> Your Todo title is:</b> {{$todo->title}}
    <b> Your Todo description is:</b> {{$todo->description}}
    </div>
@endif

                       


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->