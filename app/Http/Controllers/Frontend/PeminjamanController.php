<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Mobil;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    public function pinjam()
    {
        $mobil = Mobil::all();
        return view('frontend.peminjaman', compact('mobil'));
    }
    public function peminjaman(Request $request)
    {
        //return response()->json($request->all());
        $request->validate([
            'user_id' => 'required',
            'mobil_id' => 'required',
            'biaya' => 'required',
            'tanggal_mulai' => 'date',
            'tanggal_selesai' => 'date',
            'status' => 'required',
        ]);

        Peminjaman::insert([
            'user_id' => $request->user_id,
            'mobil_id' => $request->mobil_id,
            'biaya' => $request->biaya,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,
        ]);
    }
}
