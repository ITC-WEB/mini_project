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
        return view('frontend.pages.katalog');
    }
}