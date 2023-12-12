<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //
    //*************************CRUD CUSTOMER******************************* */
    public function usercustomer(Request $request)
    {
        $cari = $request->cari;
        $data = User::where(function ($query) use ($cari) {
            $query->where('role_id', '3')
                ->orWhere('name', 'like', "%$cari%")
                ->orWhere('email', 'like', "%$cari%");
        })
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('admin.pages.crud_customer.user_customer', compact('data'));
    }


    public function show(Request $request)
    {
        $detail = User::find($request->id);
        return view('admin.pages.crud_customer.show', compact('detail'));
    }


    public function customer_delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        return redirect('/add-customer');
    }
}
