<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Mobil;
use App\Models\Sopir;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    public function pinjam(Request $request)
    {
        $mobil = Mobil::find($request->id);
        $sopir = Sopir::all();
        // return response()->json($request);
        return view('frontend.pages.peminjaman', compact('mobil', 'sopir'));
    }
    public function peminjaman(Request $request)
    {
        // return response()->json($request->all());
        $request->validate([
            'user_id' => 'required',
            'biaya' => 'required',
            'sopir_id' => '',
            'tanggal_mulai' => 'date',
            'tanggal_selesai' => 'date',
            'status' => '',
        ]);
        if (!$request["status"]) {
            $request["status"] = 'belumbayar';
        }

        if (!$request["sopir_id"]) {
            $request["sopir_id"] = 0;
        }
        Peminjaman::create([
            'user_id' => $request->user_id,
            'mobil_id' => $request->mobil_id,
            'sopir_id' => $request->sopir_id,
            'biaya' => $request->biaya,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/pembayaran');
    }
}