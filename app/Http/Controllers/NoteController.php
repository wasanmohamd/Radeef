<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function showNotes()
    {
        $todayNotes = Note::whereDate('created_at', Carbon::today())->get();
        $previousNotes = Note::whereDate('created_at', '<', Carbon::today())->whereDate('created_at', '>=', Carbon::today()->subDays(7))->get();
        $storedNotes = Note::all(); // Fetch all stored notes
        // dd($storedNotes);
        return view('note', compact('todayNotes', 'previousNotes', 'storedNotes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'note' => 'required|string',
        ], [
            'title.required' => 'The title is required.',
            'note.required' => 'The note content is required.',
        ]);

        Note::create([
            'title' => $request->title,
            'note' => $request->note,
            'user_id'=>$request->user_id,
        ]);

        return redirect()->route('note.showNotes')->with('success', 'Note saved successfully.');
    }

    public function edit($id)
    {
        $note = Note::find($id);
    
        if (!$note) {
            return redirect()->route('note.showNotes')->with('error', 'Note not found');
        }
    
        return view('edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id);

        if (!$note) {
            return redirect()->route('note.showNotes')->with('error', 'Note not found');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'note' => 'required|string',
        ], [
            'title.required' => 'The title is required.',
            'note.required' => 'The note content is required.',
        ]);

        $note->update([
            'title' => $request->title,
            'note' => $request->note,
        ]);

        return redirect()->route('note.showNotes')->with('success', 'Note updated successfully.');
    }

    public function index()
    {
        $user = Auth::user();
        $todayNotes = $user->notes()->whereDate('created_at', today())->get();
        $storedNotes = $user->notes()->whereDate('created_at', '<', today())->get();

        return view('note.index', compact('todayNotes', 'storedNotes'));
    }
}