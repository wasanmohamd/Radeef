<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import the User model

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
            return redirect()->intended(route('home'))->with("success", "Login successful");
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
        return redirect(route('login'));
    }
}