<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {

        return view('admin.index');
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
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/add-admin')->with('success', 'Berhasil Menambahkan Data');
    }

    public function create_customer()
    {
        return view('admin.crud_customer.create');
    }
    public function add_customer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => '',
            'password' => 'required',
        ]);
        if (!$request["role_id"]) {
            $request["role_id"] = 3;
        }

        // return response()->json($request->all());
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password),
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/add-customer')->with('success', 'Berhasil Menambahkan Data');
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
        $dataedit->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/profile');
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return redirect('/add-admin');
    }
}
