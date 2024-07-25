<?php
<<<<<<< HEAD
namespace App\Http\Controllers;

=======

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
function login(){
    return view('login');
}
function registeration(){
    return view('registration');
}

function loginPost(Request $request){
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');
    if(Auth::attempt($credentials)){
        return redirect()->intended(route('home'));
    }
return redirect(route('login'))->with("error", "login details are not valid");
}
function registerationPost(Request $request){
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
    return redirect(route('registeration'))->with("error", "Registration friled, try again.");
}
return redirect(route('login'))->with("Success", "Registration success, Login to access the app");

}
function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('login'));
}
}
=======
>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import the User model
<<<<<<< HEAD
use App\Models\Note; // Assuming you have a Note model for interacting with the notes table
=======
>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918

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
<<<<<<< HEAD
            return redirect()->intended(route('landing'))->with("success", "Login successful");
=======
            return redirect()->intended(route('home'))->with("success", "Login successful");
>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918
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
<<<<<<< HEAD
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
=======
        return redirect(route('login'));
    }
}
>>>>>>> 308c7be3ec1c6eec6c853ea99a3b8f491aef0ff2
>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918
