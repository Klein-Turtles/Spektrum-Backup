<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productPageController extends Controller
{

    public function product(){
        return view('product');
    }
}
