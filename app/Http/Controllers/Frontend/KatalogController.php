<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KatalogController extends Controller
{
    //
    public function index(Request $request)
    {
        $cari = $request->cari;
        $mobil = Mobil::with('merek')
            ->where('name', 'LIKE', '%' . $cari . '%')
            // ->orWhere('noplat', 'LIKE', '%' . $cari . '%')
            ->orWhere('kapasitas_orang', 'LIKE', '%' . $cari . '%')
            ->orWhere('type', 'LIKE', '%' . $cari . '%')
            ->orWhere('harga_sewa', $cari)
            ->orWhereHas('merek', function ($query) use ($cari) {
                $query->where('name', 'LIKE', '%' . $cari . '%');
            })
            ->paginate(6);
        return view('frontend.pages.katalog', compact('mobil'));
    }
}
