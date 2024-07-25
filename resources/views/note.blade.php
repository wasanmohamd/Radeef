@extends('layout')

@section('title', 'Notes')

@section('content')
    <link rel="stylesheet" href="assets/css/note.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        
      
    </style>
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
           <div class="sidebar">
    <h5>Today</h5>
    <div class="today-section mb-3">
        @if(isset($todayNotes) && count($todayNotes) > 0)
            <ul>
                @foreach($todayNotes as $note)
                    @if($note->user_id == Auth::user()->id)
                        <li><a href="{{ route('note.edit', $note->id) }}" class="note-box">{{ $note->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        @else
            <p>No notes available for today.</p>
        @endif
    </div>

    
    <h5>Previous Notes</h5>
<div class="previous-notes">
    @if(isset($storedNotes) && count($storedNotes) > 0)
        <ul>
            @foreach($storedNotes as $note)
                @if($note->user_id == Auth::user()->id && !$note->created_at->isToday())
                    <li><a href="{{ route('note.edit', $note->id) }}" class="note-box">{{ $note->title }}</a></li>
                @endif
            @endforeach
        </ul>
    @else
        <p>No previous notes available.</p>
    @endif
</div>
</div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="main-content">
                    <h3>Dairy Note</h3>
                    <p>{{ \Carbon\Carbon::now()->format('l, F j, Y') }}</p>
                    <p><span id="currentTime">
                        <?php
                            $saudiArabiaTime = \Carbon\Carbon::now('Asia/Riyadh');
                            echo $saudiArabiaTime->format('h:i A');
                        ?>
                    </span></p>

                    <script>
                        // Get the current hour
                        var now = new Date();
                        var currentHour = now.getHours();
                        
                        // Display the current hour
                        document.getElementById("currentHour").textContent = currentHour;
                    </script>

                    <div class="note-form">
                        <form action="{{ route('note.store') }}" method="post">
                            @csrf
<input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                            <div class="mb-3">
                                <label for="InputTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="InputTitle" name="title" aria-describedby="titleHelp">
                                <div id="titleHelp" class="form-text"></div>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" id="InputNote" name="note" placeholder="Write your note here..." rows="12"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Note</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection