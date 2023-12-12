<?php

namespace App\Http\Controllers\Backend;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PinjamController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        $pinjam = Peminjaman::with(['user', 'mobil'])
            ->where('user_id', 'LIKE', '%' . $cari . '%')
            ->orWhere('biaya', $cari)
            ->orWhere('status', $cari)
            ->orWhereHas('user', function ($query) use ($cari) {
                $query->where('name', 'LIKE', '%' . $cari . '%');
            })
            ->orWhereHas('mobil', function ($query) use ($cari) {
                $query->where('name', 'LIKE', '%' . $cari . '%');
            })
            ->orderBy('id', 'DESC')
            ->paginate(5);

        return view('admin.pages.crud_peminjaman.peminjaman', compact('pinjam'));
    }

    public function edit_peminjaman(Request $request)
    {
        $pinjam = Peminjaman::find($request->id);
        return view('admin.pages.crud_peminjaman.edit_peminjaman', compact('pinjam'));
    }
    public function update_peminjaman(Request $request)
    {
        $data = Peminjaman::find($request->id);
        $data->status = $request->input('status');
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
