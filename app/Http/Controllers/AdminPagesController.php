<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function admin_porto ()
    {
        return view('dashboard.portofolio');
    }

    public function admin_produk ()
    {
        return view('dashboard.produk');
    }
}
