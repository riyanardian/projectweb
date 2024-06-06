<?php

namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
 
class LoginController extends Controller 
{ 
    public function index() 
    { 
        return View('login.index'); 
    } 

    public function authenticate(Request $request) 
    { 
        $credentials = $request->validate([ 
            'username'  => 'required', 
            'password'  => 'required' 
        ]); 
 
        if (Auth::attempt($credentials)) { 
            $request->session()->regenerate(); 
 
            return redirect()->intended('/books'); 
 
        } 
 
        return back()->with('loginError', 'Login failed!'); 
    }
    public function logout()
    {
        Auth::logout(); // Proses logout pengguna
        return redirect('/login'); // Redirect ke halaman utama atau halaman login
    }
} 