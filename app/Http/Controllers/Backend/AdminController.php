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
        $disewa = Peminjaman::where('status', 'sedang disewa')->count();
        $validasi = Peminjaman::where('status', 'belumbayar')->count();
        $selesai = Peminjaman::where('status', 'selesai')->count();
        $boking = Peminjaman::count();


        return view('admin.index', compact('disewa', 'validasi', 'selesai', 'boking'));
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
        $addAdmin = User::insert([
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
        if ($addAdmin) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Menambahkan Data');
        }
        return redirect('/add-admin');
    }

    //edit admin di super admin
    public function edit_admin(Request $request, $id)
    {
        $item = User::find($request->id);
        return view('admin.pages.crud_admin.edit_admin', compact('item'));
    }

    public function updating(Request $request)
    {
        $editadmin = User::find($request->id);
        $editadmin->name = $request->name;
        $editadmin->email = $request->email;
        $editadmin->gender = $request->gender;
        $editadmin->phone = $request->phone;
        $editadmin->alamat = $request->alamat;
        $editadmin->save();

        return redirect('/add-admin');
    }

    //Profile Super Admin & Admin
    public function profile()
    {
        return view('admin.pages.crud_admin.profile');
    }

    //Edit Super Admin & Admin
    public function change()
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

        return redirect('/profile');
    }



    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        return redirect('/add-admin');
    }
}
