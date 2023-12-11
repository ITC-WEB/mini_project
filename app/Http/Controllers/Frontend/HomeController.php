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

        $photo = $request->file('photo')->store('photo');
        $upload = Data::create([
            'id' => $request->id,
            'photo' => $photo,
        ]);
        $upload_id = $upload->id;
        $user = User::where('data_id', (int)$request->data->id)->latest('id')->first();
        $user->update(['data_id' => $upload_id]);
        return response()->json($user);
        return redirect('/profilecustumer');
    }

    public function profilecustumer(Request $request)
    {
        return view('frontend.pages.profilecustumer');
    }
}
