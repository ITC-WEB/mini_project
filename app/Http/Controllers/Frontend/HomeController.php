<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Data;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Sopir;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $jmlUser = User::where('role_id', '3')->count();
        $jmlMobil = Mobil::count();
        $jmlSopir = Sopir::count();
        $peminjam = Peminjaman::count();
        $mobil = Mobil::orderBy('name', 'desc')
            ->take(3)
            ->get();

        return view('frontend.index', compact('mobil', 'jmlUser', 'jmlMobil', 'jmlSopir', 'peminjam'));
    }

    public function tentangKami()
    {
        return view('frontend.pages.tentangkami');
    }

    public function syaratKetentuan()
    {
        return view('frontend.pages.syarat');
    }

    public function kontak()
    {
        return view('frontend.pages.kontak');
    }

    public function sukses()
    {
        return view('frontend.pages.sukses');
    }

    public function eror()
    {
        return view('frontend.pages.eror');
    }

    public function editcustomer()
    {
        return view('frontend.pages.editcustomer');
    }

    public function update_customer(Request $request)
    {
        // Validasi data yang diterima, termasuk foto yang diunggah
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan jenis file dan ukurannya sesuai kebutuhan
            'ktp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sim' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Dapatkan user yang sedang diautentikasi
        $user = Auth::user();

        // Perbarui model 'Data' dengan foto baru (jika ada)
        if ($request->hasFile('photo')) {
            // Simpan foto yang diunggah
            $photo = $request->file('photo')->store('photo');

            // Perbarui tabel 'data'
            Data::updateOrCreate(['id' => $user->data_id], ['photo' => $photo]);
        }

        if ($request->hasFile('ktp')) {
            // Simpan foto yang diunggah
            $ktp = $request->file('ktp')->store('ktp');

            // Perbarui tabel 'data'
            Data::updateOrCreate(['id' => $user->data_id], ['ktp' => $ktp]);
        }
        if ($request->hasFile('sim')) {
            // Simpan foto yang diunggah
            $ktp = $request->file('sim')->store('sim');

            // Perbarui tabel 'data'
            Data::updateOrCreate(['id' => $user->data_id], ['sim' => $ktp]);
        }


        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->save();
        // Kembalikan respons JSON dengan user yang diperbarui
        return redirect('/profilecustumer');
    }


    public function profilecustumer(Request $request)
    {
        return view('frontend.pages.profilecustumer');
    }
}
