<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Sopir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SopirController extends Controller
{
    //
    //*****************************CRUD SOPIR********************************** */
    public function usersopir()
    {
        $data = Sopir::all();
        return view('admin.pages.crud_sopir.user_sopir', compact('data'));
    }

    //Crud Sopir
    public function create_sopir()
    {
        return view('admin.pages.crud_sopir.create');
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
}
