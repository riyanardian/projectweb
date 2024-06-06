<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class RegisterController extends Controller
{
    public function index()
    {
        return View("register.index");
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'  => 'required|max:255',
            'username'  => ['required', 'min:3', 'max:255', 'unique:users'],
            'email'  => 'required|email|unique:users',
            'password'  => 'required|min:5|max:20',
        ]);

        try {
            $validateData['password'] = Hash::make($validateData['password']);
            User::create($validateData);
            Session()->flash('register', "Selamat ". $validateData['name'] .", Register berhasil");
            return redirect('/login');
        } catch (\Throwable $th) {
            echo $th;
        }
    }

}

