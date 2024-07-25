<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import the User model
use App\Models\Note; // Assuming you have a Note model for interacting with the notes table

class AuthManager extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('home'));
        }
        return view('login');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect(route('home'));
        }
        return view('register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('landing'))->with("success", "Login successful");
        }

        return redirect(route('login'))->with("error", "Invalid login credentials");
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'))->with("error", "Registration failed, please try again.");
        }
        return redirect(route('register'))->with("success", "Registration successful");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'))->with("success", "Logged out successfully");
    }

    public function note()
    {
        // Retrieve notes from the database
        $notes = Note::all();

        return view('note', compact('notes'));
    }

    public function notePost(Request $request)
    {
        $request->validate([
            'title' => '',
            'note' => 'required'
        ]);

        $title = $request->input('title');
        $noteText = $request->input('note');

        // Create a new instance of the Note model
        $note = new Note();
        $note->title = $title;
        $note->note = $noteText;

        // Save the note to the database
        $note->save();

        // Redirect the user to a relevant page after the POST request
        return redirect()->route('note')->with("success", "Note saved successfully");
    }
}