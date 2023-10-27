<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $pinjam = Peminjaman::all();
        return view('admin.pages.peminjaman', compact('pinjam'));
    }
}
