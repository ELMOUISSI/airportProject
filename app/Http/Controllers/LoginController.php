<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        // Validate the user 
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed... 
            return redirect()->intended('/dashboard');
        }

        // Authentication no passed...
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }


    public function loginApi(Request $request){
        $credentials = $request->only("email", "password");
    
        if (Auth::attempt($credentials)) {
            // Authentication passed... 
            return response()->json(['token' => Auth::user()->createToken("login")->plainTextToken]);
        }
    
        // If authentication fails, return a response indicating failure
        return response()->json(["message" => "Invalid credentials"], 401);
    }
    
}
