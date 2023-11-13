<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFrontendController extends Controller
{
    public function home(Request $request)
    {
        return view('pages.home');
    }
}