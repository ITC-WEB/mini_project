<?php

namespace App\Http\Controllers\Backend;

use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MobilController extends Controller
{
    public function mobil(Request $request)
    {

        $cari = $request->cari;
        $mobil = Mobil::with('merek')
            ->where('name', 'LIKE', '%' . $cari . '%')
            ->orWhere('noplat', 'LIKE', '%' . $cari . '%')
            ->orWhere('harga_sewa', $cari)
            ->orWhereHas('merek', function ($query) use ($cari) {
                $query->where('name', 'LIKE', '%' . $cari . '%');
            })
            ->paginate(5);
        return view('admin.pages.data_mobil', compact('mobil'));
    }
    //Crud Mobil
    public function create()
    {
        return view('admin.crud_mobil.create');
    }

    public function add_mobil(Request $request)
    {
        $request->validate([
            'noplat' => 'required',
            'name' => 'required',
            'merek_id' => 'required|integer',
            'tahun' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'mimes:jpg,png,jpeg|image|max:2048',
        ]);
        $extensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = $request->name . '-' . now()->timestamp . "." . $extensi;
        $gambar = $request->file('gambar')->storeAs('public/mobil', $newName);
        $gambar = str_replace('public/mobil/', '', $gambar);


        Mobil::create([
            'noplat' => $request->noplat,
            'name' => $request->name,
            'merek_id' => $request->merek_id,
            'tahun' => $request->tahun,
            'harga_sewa' => $request->harga_sewa,
            'gambar' => $gambar,
        ]);
        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/data-mobil')->with('success', 'Berhasil Menambahkan Data');
    }

    public function mobil_delete(Request $request)
    {
        Mobil::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return redirect('/data-mobil');
    }
}
