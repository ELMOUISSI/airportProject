<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to import the User model

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
    
    public function register(Request $request)
    {
        // Validate the user 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),  
        ]);

        
        auth()->login($user);

        // Redirect the user 
        return redirect('/dashboard')->with('success', 'Registration successful!');
    }
}
