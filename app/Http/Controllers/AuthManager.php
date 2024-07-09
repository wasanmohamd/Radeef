<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){

        return view(login);
    }

    function register(){

        return view(register);
    }

    function loginpost(Request $REQUEST){
        $REQUEST->validate([

            'email'=> 'required',
            'password'=> 'required'

        ]);

            $credentials = $request->only('email','passowrd');

            if(Auth::attempt($credentials)){
                
                return redirect()->intended(route('home'))->with("Success","Login details are not valid");
            }

            return redirect(route('login'))->with("error", "Login details are not valid")




    }

}
