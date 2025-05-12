<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Service;
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

public function portofolio()
{

    $portofolio = Portofolio::paginate(8);
    return view ('portofolio', compact('portofolio'));
}
public function detailporto($slug)
{
    $portofolio = Portofolio::where('slug', $slug)->firstOrFail();
    return view ('detail-porto', compact('portofolio'));
}

public function layananPopuler()
{

    // Ambil semua kategori unik
    $kategorilist = Service::select('kategori')->distinct()->pluck('kategori');

    // Ambil satu layanan untuk tiap kategori
    $layananPerKategori = collect();

    foreach ($kategorilist as $kategori) {
        $layanan = Service::where('kategori', $kategori)->inRandomOrder()->first();
        if ($layanan) {
            $layananPerKategori->push($layanan);
        }
    }
        return view('services.selengkapnya', compact('layananPerKategori'));
}

}
