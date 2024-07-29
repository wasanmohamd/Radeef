<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->id == 0) {
                session(['role' => 'admin']);
            } else {
                session(['role' => 'user']);
            }

            return redirect()->intended('landing')->with('success', 'Login successful');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
