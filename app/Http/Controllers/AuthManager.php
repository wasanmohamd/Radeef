<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Note;

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }

     function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->id == 0) {
                // Admin
                return redirect()->route('admin.dashboard');
            } else {
                // Normal user
    return redirect()->intended(route('landing'));
}
        } else {
            return redirect(route('login'))->with("error", "login details are not valid");
        }
    }


    function register(){
        return view('register');
    }

    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $date['name'] = $request->name;
        $date['email'] = $request->email;
        $date['password'] = Hash::make($request->password);
        $user = User::create($date);
    if(!$user){
        return redirect(route('register'))->with("error", "Registration friled, try again.");
    }
    return redirect(route('login'))->with("Success", "Registration success, Login to access the app");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('landing'))->with("success", "Logged out successfully");
    }

    public function note()
    {
        $notes = Note::all();
        return view('note', compact('notes'));
    }

    public function notePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'note' => 'required'
        ]);

        $title = $request->input('title');
        $noteText = $request->input('note');

        $note = new Note();
        $note->title = $title;
        $note->note = $noteText;
        $note->save();

        return redirect()->route('note')->with("success", "Note saved successfully");
    }
}