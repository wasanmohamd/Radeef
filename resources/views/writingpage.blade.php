@extends('layout')

@section('title', 'Technical Support')

@section('content')
<style>
    .container.write-email {
        width: 90%;
        max-width: 600px;
        margin: 30px auto;
        margin-top: 180px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        position: relative;
        background-color: #d4b8c6;
        color: #ffffff;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        padding: 7px;
        margin-top: -50px;
        margin-left: -20px;
        margin-right: -20px;
    }

    .btn-back {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: #ffffff;
    }

    .btn-back:hover {
        background: none;
    }

    .h1 {
        color: #a0527a;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-top: 30px; /* Adjust this value to move the fields down */
    }

    label {
        margin-bottom: 30px;
        font-weight: bold;
        color: #5a2f4d;
    }

    input,
    textarea {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        background-color: #a0527a;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 10px;
        margin: 5px;
        cursor: pointer;
        width: 100px;
        /* Set a specific width based on the reference button */
        margin-right: 30px;
        margin-bottom: 50px;
    }

    button:hover {
        background-color: #8d3d5e;
    }
</style>

<div class="container write-email">
    <div class="card-header">
        <button class="btn-back" onclick="history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
        </button>
        Write Email
    </div>
    <form action="{{ route('send.email', $inquiry->id) }}" method="POST">
        @csrf
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" class="form-control" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" class="form-control" rows="10" required></textarea>

        <button type="submit">Send Email</button>
    </form>
</div>
@endsection