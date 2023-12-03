<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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
                return redirect()->intended('/auth')->with('success', 'Berhasil Login');
            } elseif (Auth::user()->role_id == '2') {
                return redirect()->intended('/auth')->with('success', 'Berhasil Login');
            } else {
                return redirect()->intended('/')->with('success', 'Berhasil Login');
            }
        }
        return redirect('/log')->with('errors', 'Data Belum Terdaftar');
    }

    public function index_reg()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => '',
            'password' => 'required',
            'gender' => 'in:male,female',
            'phone' => 'required',
            'alamat' => 'required',
            'ktp' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sim' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        if (!$request["role_id"]) {
            $request["role_id"] = 3;
        }
        $ktp = $request->file('ktp')->store('ktp');
        $sim = $request->file('sim')->store('sim');
        // $ktp = str_replace('public/ktp/', '', $ktp);
        // $sim = str_replace('public/sim/', '', $sim);
        $data_user = Data::create([
            'id' => $request->id,
            'sim' => $sim,
            'ktp' => $ktp,
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'data_id' => $data_user->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        return redirect('/log')->with('success', 'Berhasil Register');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
