<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Mobil;
use App\Models\Sopir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function detail(Request $request)
    {
        $mobil = Mobil::find($request->id);
        $sopir = Sopir::all();
        // return response()->json($request);
        return view('frontend.pages.detail', compact('mobil', 'sopir'));
    }
}
