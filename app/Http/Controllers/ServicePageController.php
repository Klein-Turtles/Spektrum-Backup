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
            'iot',
            'iac',
            'robotic',
            '3dprint',
            'energy',
            'lasercutting',
            'iottrain',
            'techfarm',
            'selengkapnya'
        ];

        if (!in_array($page, $availablePages)) {
            abort(404);
        }

        return view('services.' . $page);
    }

    public function product($page)
    {
        $availablePages = [
            'sensor',
            'iot',
            'industry',
            'energy',
            'edukasi',
            'selengkapnya'
        ];

        if (!in_array($page, $availablePages)) {
            abort(404);
        }

        return view('products.' . $page);
    }

    public function portofolio()
    {

        $portofolio = Portofolio::paginate(8);
        return view('portofolio', compact('portofolio'));
    }
    public function detailporto($slug)
    {
        $portofolio = Portofolio::where('slug', $slug)->firstOrFail();
        return view('detail-porto', compact('portofolio'));
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

// Services
public function index()
{
    $services = Service::all();
    return view('dashboard.services.index', compact('services'));
}

public function create()
{
    $categories = ['IoT', 'Automation', 'Robotics', 'TechFarm']; // contoh
    return view('dashboard.services.create', compact('categories'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string',
        'description' => 'required',
    ]);

    Service::create($request->all());
    return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil ditambahkan.');
}

public function edit(Service $service)
{
    $categories = ['IoT', 'Automation', 'Robotics', 'TechFarm'];
    return view('dashboard.services.edit', compact('service', 'categories'));
}

public function update(Request $request, Service $service)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string',
        'description' => 'required',
    ]);

    $service->update($request->all());
    return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil diupdate.');
}

public function destroy(Service $service)
{
    $service->delete();
    return back()->with('success', 'Layanan berhasil dihapus.');
}


}
