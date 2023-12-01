<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $jmlUser = User::where('role_id', '3')->count();
        $jmlAdmin = User::where('role_id', '2')->count();
        $jmlMobil = Mobil::count();
        $boking = Peminjaman::count();


        return view('admin.index', compact('jmlUser', 'jmlMobil', 'jmlAdmin', 'boking'));
    }

    // *********************CRUD ADMIN********************************
    public function useradmin()
    {
        $data = User::where('role_id', '2')
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.pages.crud_admin.user_admin', compact('data'));
    }

    // CREATE ADMIN
    public function create_admin()
    {
        return view('admin.pages.crud_admin.create');
    }
    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => '',
            'password' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
        ]);
        if (!$request["role_id"]) {
            $request["role_id"] = 2;
        }

        // return response()->json($request->all());
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/add-admin')->with('success', 'Data berhasil diubah');
    }

    //Profile Super Admin & Admin
    public function profile()
    {
        return view('admin.pages.crud_admin.profile');
    }

    //Edit Super Admin & Admin
    public function change(Request $request)
    {
        return view('admin.pages.crud_admin.edit_profile');
    }
    public function update_admin(Request $request)
    {

        $dataedit = User::where('id', $request->user()->id)->first();
        $dataedit->name = $request->name;
        $dataedit->email = $request->email;
        $dataedit->gender = $request->gender;
        $dataedit->phone = $request->phone;
        $dataedit->alamat = $request->alamat;
        $dataedit->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/profile');
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        return redirect('/add-admin');
    }
}
