@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Previous Notes</div>

                <div class="card-body">
                    <!-- Display previous notes -->
                    @if(count($previousNotes) > 0)
                    <ul class="list-group">
                        @foreach($previousNotes as $note)
                        <li class="list-group-item">
                            <h4>{{ $note->title }}</h4>
                            <p>{{ $note->note }}</p>
                            <p class="text-muted">Created on: {{ $note->created_at->format('Y-m-d H:i:s') }}</p>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p>No previous notes found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection