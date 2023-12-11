<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Sopir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
            'ktp' => 'required',
            'sim' => 'required',
        ]);
        if ($request->hasFile('ktp')) {
            $ktp_sopir = $request->file('ktp')->store('ktp_sopir');
        }
        if ($request->hasFile('sim')) {
            $sim_sopir = $request->file('sim')->store('sim_sopir');
        }

        // return response()->json($request->all());
        $addSupir = Sopir::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'ktp' => $ktp_sopir,
            'sim' => $sim_sopir,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($addSupir) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Menambahkan Data');
        }
        return redirect('/add-sopir');        
    }

    public function edit_sopir(Request $request, $id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('admin.pages.crud_sopir.edit_sopir', compact('sopir'));
    }

    public function update_sopir(Request $request)
    {
        if (!$request["status"]) {
            $request["status"] = '1';
        }

        $edit_sopir = Sopir::find($request->id);

        if ($request->hasFile('ktp')) {
            if (Storage::exists($edit_sopir->ktp)) {
                Storage::delete($edit_sopir->ktp);
            }
            $ktp_sopir = $request->file('ktp')->store('ktp_sopir');
        }
        if ($request->hasFile('sim')) {
            if (Storage::exists($edit_sopir->sim)) {
                Storage::delete($edit_sopir->sim);
            }
            $sim_sopir = $request->file('sim')->store('sim_sopir');
        }
        $edit_sopir->name = $request->name;
        $edit_sopir->phone = $request->phone;
        $edit_sopir->gender = $request->gender;
        $edit_sopir->usia = $request->usia;
        $edit_sopir->alamat = $request->alamat;
        $edit_sopir->ktp = $ktp_sopir;
        $edit_sopir->sim = $sim_sopir;
        $edit_sopir->save();

        if ($edit_sopir) {
            Session::flash('update', 'success');
            Session::flash('message', 'Driver Berhasil Di Update');
        }

        // return response()->json($dataedit);
        return redirect('/add-sopir');
    }
    public function detail_sopir(Request $request)
    {
        $dataSopir = Sopir::find($request->id);
        return view('admin.pages.crud_sopir.data_sopir', compact('dataSopir'));
    }
    public function sopir_delete(Request $request)
    {
        Sopir::where('id', $request->id)->delete();
        return redirect('/add-sopir');
    }

}
