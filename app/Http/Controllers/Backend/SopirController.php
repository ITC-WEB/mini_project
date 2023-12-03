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
        $addSupir = Sopir::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if ($addSupir) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Menambahkan Data');
        }
        return redirect('/add-sopir');
    }
}
