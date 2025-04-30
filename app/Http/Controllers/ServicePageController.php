<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function service($page)
{
    $availablePages = [
        'iot', 'iac', 'robotic', '3dprint', 'energy', 'lasercutting', 'iottrain', 'techfarm', 'selengkapnya'
    ];

    if (!in_array($page, $availablePages)) {
        abort(404);
    }

    return view('services.' . $page);
}

public function product($page)
{
    $availablePages = [
        'sensor', 'iot', 'industry', 'energy', 'edukasi',  'selengkapnya'
    ];

    if (!in_array($page, $availablePages)) {
        abort(404);
    }

    return view('products.' . $page);
}

}
