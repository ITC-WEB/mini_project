<?php

namespace App\Http\Controllers\Backend;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    public function mobil(Request $request)
    {

        $cari = $request->cari;
        $mobil = Mobil::with('merek')
            ->where('name', 'LIKE', '%' . $cari . '%')
            ->orWhere('noplat', 'LIKE', '%' . $cari . '%')
            ->orWhere('harga_sewa', $cari)
            ->orWhere('status', 'LIKE', '%' . $cari . '%')
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
            'kapasitas' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
            'type' => $request->type,
            'harga_sewa' => $request->harga_sewa,
            'gambar' => $gambar,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/data-mobil')->with('success', 'Berhasil Menambahkan Data');
    }

    //edit mobil
    public function edit_mobil(Request $request)
    {
        $mobil = Mobil::find($request->id);
        return view('admin.crud_mobil.edit', compact('mobil'));
    }

    //status
    public function update_status($mobilId)
    {
        $mobils = Mobil::find($mobilId);
        if ($mobils) {
            if ($mobils->status) {
                $mobils->status = 0;
            } else {
                $mobils->status = 1;
            }
            $mobils->save();
        }
        return back();
    }
    public function update_mobil(Request $request)
    {

        if ($request->hasFile('gambar')) {
            // Pengguna mengunggah gambar baru
            $extensi = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . "." . $extensi;
            $gambar = $request->file('gambar')->storeAs('public/mobil', $newName);
            $gambar = str_replace('public/mobil/', '', $gambar);

            // Hapus gambar lama jika perlu (jika Anda ingin menggantinya)
            if ($gambar) {
                Storage::disk('public')->delete($gambar);
            }
        }

        $dataedit = Mobil::where('id', $request->id)->first();
        $dataedit->noplat = $request->noplat;
        $dataedit->name = $request->name;
        $dataedit->merek_id = $request->merek_id;
        $dataedit->tahun = $request->tahun;
        $dataedit->kapasitas = $request->kapasitas;
        $dataedit->deskripsi = $request->deskripsi;
        $dataedit->type = $request->type;
        $dataedit->harga_sewa = $request->harga_sewa;
        $dataedit->gambar = $gambar;
        $dataedit->status = $request->status;
        $dataedit->save();

        // return response()->json($dataedit);

        return redirect('/data-mobil');
    }

    //delete mobile
    public function mobil_delete(Request $request)
    {
        Mobil::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return redirect('/data-mobil');
    }
}
