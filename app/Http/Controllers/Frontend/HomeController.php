<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Sopir;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('frontend.homepage');
    }
    public function index()
    {
        $jmlUser = User::count();
        $jmlMobil = Mobil::count();
        $jmlSopir = Sopir::count();
        $mobil = Mobil::all();

        return view('frontend.index', compact('mobil', 'jmlUser', 'jmlMobil', 'jmlSopir'));
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

    public function detailMobil(Request $request)
    {
        $mobil = Mobil::find($request->id);
        $sopir = Sopir::all();
        // return response()->json($request);
        return view('frontend.pages.detail', compact('mobil', 'sopir'));
    }
}
