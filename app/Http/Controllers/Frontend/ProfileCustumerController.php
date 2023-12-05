<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileCustumerController extends Controller
{  public function profilecustumer()
    {
        return view('frontend.pages.profilecustumer');
    }
}