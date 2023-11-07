<?php

namespace App\Http\Controllers\Backend;

use App\Models\Data;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Sopir;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $jmlUser = User::count();
        $jmlMobil = Mobil::count();

        return view('admin.index', compact('jmlUser', 'jmlMobil'));
    }

    // Pages
    public function useradmin()
    {
        $data = User::where('role_id', '2')->get();
        return view('admin.pages.user_admin', compact('data'));
    }

    public function usercustomer()
    {
        $data = User::where('role_id', '3')->get();
        return view('admin.pages.user_customer', compact('data'));
    }

    public function usersopir()
    {
        $data = Sopir::all();
        return view('admin.pages.user_sopir', compact('data'));
    }

    // CRUD 
    public function create_admin()
    {
        return view('admin.crud_admin.create');
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

    //Crud Sopir
    public function create_sopir()
    {
        return view('admin.crud_sopir.create');
    }
    public function add_sopir(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ]);

        // return response()->json($request->all());
        Sopir::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/add-sopir')->with('success', 'Berhasil Menambahkan Data');
    }

    //Profile Super Admin & Admin
    public function profile()
    {
        return view('admin.pages.profile');
    }

    //Edit Super Admin & Admin
    public function change()
    {
        return view('admin.pages.edit_profile');
    }
    public function update(Request $request)
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

    public function show(Request $request)
    {
        $detail = User::find($request->id);
        return view('admin.pages.show', compact('detail'));
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return redirect('/add-admin');
    }
    public function customer_delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return redirect('/add-customer');
    }
}
