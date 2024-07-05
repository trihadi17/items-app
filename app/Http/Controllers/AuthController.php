<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Custom Request
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    // Get View Login Page
    public function index(){
        return view('pages.auth.login');
    }

    // Authenticate
    public function login(AuthRequest $request){
        
        // Input Request
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Cek user berdasarkan data request
        if (Auth::attempt($credentials)) {
            // true -> dashboard page
            return redirect('/dashboard');
        }

        // false -> back to login page
        return back()->with('error','Incorrect email or password');
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
