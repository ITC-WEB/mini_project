<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Bukti;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    //
    public function index(Request $request)
    {
        $peminjaman = Peminjaman::latest('id')->first();
        return view('frontend.pages.statuscekout', compact('peminjaman'));
    }

    public function update_pembayaran(Request $request)
    {
        $bayar = $request->file('bukti')->store('bukti');
        $bukti_bayar = Bukti::create([
            'id' => $request->id,
            'bukti' => $bayar,
        ]);
        $bukti_id = $bukti_bayar->id;
        $peminjaman = Peminjaman::where('user_id', (int)$request->user_id)->latest('id')->first();
        $peminjaman->update(['bukti_id' => $bukti_id]);
        return redirect('/sukses');
    }
}
