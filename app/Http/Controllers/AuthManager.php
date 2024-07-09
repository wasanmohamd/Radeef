<?php

namespace App\Http\Controllers;

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
