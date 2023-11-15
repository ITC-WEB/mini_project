<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('frontend.pages.pembayaran');
    }
}
