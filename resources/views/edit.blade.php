@extends('layout')

@section('title', 'Edit Note')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/images/Styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* Custom styles for the form */
        body {
            font-family: "Roboto", sans-serif;
            background-color: #f8f9fa;
        }

        .container{

            margin-top: 20px;
        }
        h1 {
            font-size: 2.5rem;
            color: #894565;
            margin-bottom: 20px;
        }

        .note-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px #e4d1dd;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            color: #894565;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #894565;
            outline: none;
        }

        .btn-primary {
            background-color: #894565;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px 20px;
        }

        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:focus {
            background-color: #894565;
        }
    </style>

    <link rel="stylesheet" href="assets\css\note.css"> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="note-form">
                <h1>Edit Note</h1>
                <form action="{{ route('note.update', $note->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" value="{{ $note->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea name="note">{{ $note->note }}</textarea>
                    </div>
                    <!-- Hidden input field to update created_at -->
                    <input type="hidden" name="created_at" value="{{ $note->created_at }}">
                    <button type="submit" class="btn btn-primary">Update Note</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection