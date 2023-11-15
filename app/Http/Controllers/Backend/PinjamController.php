<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $pinjam = Peminjaman::orderBy('id',  'DESC')->get();
        return view('admin.pages.peminjaman', compact('pinjam'));
    }

    public function edit(Request $request)
    {
        $pinjam = Peminjaman::find($request->id);
        return view('admin.pages.edit_peminjaman', compact('pinjam'));
    }
    public function update(Request $request)
    {
        $data = Peminjaman::find($request->id);
        $data->status = $request->input('status');
        $data->save();

        return redirect('/data-pinjam');
    }
}
