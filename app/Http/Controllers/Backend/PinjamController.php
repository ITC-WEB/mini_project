<?php

namespace App\Http\Controllers\Backend;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PinjamController extends Controller
{
    public function index(Request $request)
    {

        $pinjam = Peminjaman::orderBy('id', 'DESC')
            ->get();

        return view('admin.pages.crud_peminjaman.peminjaman', compact('pinjam'));
    }


    public function edit_sopir(Request $request)
    {
        $pinjam = Peminjaman::find($request->id);
        return view('admin.pages.crud_peminjaman.edit_peminjaman', compact('pinjam'));
    }
    public function update_sopir(Request $request)
    {
        $sopir = Peminjaman::find($request->id);

        $sopir->sopir->name = $request->input('name');

        $sopir->save();
        return back();
    }

    public function edit_peminjaman(Request $request)
    {
        $pinjam = Peminjaman::find($request->id);
        return view('admin.pages.crud_peminjaman.edit_peminjaman', compact('pinjam'));
    }
    public function update_peminjaman(Request $request)
    {
        $data = Peminjaman::find($request->id);
        if ($data->mobil) {
            $data->mobil->status_mobil = $request->input('status_mobil');
            $data->status = $request->input('status');
            $data->mobil->save();
        }

        $data->save();


        return redirect('/data-pinjam');
    }

    public function detail_pinjam(Request $request)
    {
        $dataPinjam = Peminjaman::find($request->id);
        return view('admin.pages.crud_peminjaman.detail_pinjam', compact('dataPinjam'));
    }

    public function bukti_bayar(Request $request)
    {
        $bukti = Peminjaman::find($request->id);
        return view('admin.pages.crud_peminjaman.bukti', compact('bukti'));
    }

    public function delete_peminjam(Request $request)
    {
        Peminjaman::where('id', $request->id)->delete();
        return redirect('/data-pinjam');
    }
}
