<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function simpan(Request $req)
    {
        User::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'password' => bcrypt($req->password)
        ]);

        return redirect('/');
    }

    public function login()
    {
        return view('login');
    }
    public function ceklogin(Request $req)
    {
        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password
        ]))
        {
            return redirect('/home');
        }
        else
        {
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
