<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role_id == '1') {
                return redirect()->intended('/auth');
            } elseif (Auth::user()->role_id == '2') {
                return redirect()->intended('/auth');
            } else {
                return redirect()->intended('/user');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Gagal');

        return redirect('/log');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
