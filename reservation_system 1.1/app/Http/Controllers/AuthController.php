<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class AuthController extends Controller
{
    // Show the login form
    public function showLogin()
    {
        return view('login'); // resources/views/login.blade.php
    }

    // Handle login submission
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $member = Auth::user();
            session([
                'member_id' => $member->id,
                'email' => $member->email,
            ]);
            return redirect()->route('reservation'); 
        }

        return redirect()->route('login.failed'); 
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('home'); 
    }
}
