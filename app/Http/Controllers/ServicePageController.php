<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
        public function service(Request $request)
    {

        $kategorilist = Service::select('kategori')->distinct()->pluck('kategori');

    $query = Service::query();

    if ($request->has('kategori') && $request->kategori !== '') {
        $query->where('kategori', $request->kategori);
    }

    if ($request->has('q') && $request->q !== '') {
        $query->where('nama', 'like', '%' . $request->q . '%');
    }

    $layanan = $query->paginate(8)->withQueryString(); // 8 per halaman, withQueryString biar query tetap (kategori nggak hilang saat klik halaman)

        return view('services', compact('layanan', 'kategorilist'));
    }





    // Services
    public function index()
    {
        $layanan = Service::all();
        return view('dashboard.adminservice.index', compact('layanan'));
    }

    public function detailService($slug)
    {
        $layanan = Service::where('slug', $slug)->firstOrFail();
        return view('detail-service', compact('layanan'));
    }

    public function create()
    {
        $kategori = ['Internet Of Things', 'Automation', 'Robotics', 'Tech Farm', '3D Printing' ,'Renewable Energy', 'Lasser Cutting', 'Workshop IoT']; // atau ambil dari model Category
        return view('dashboard.adminservice.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi'=>'required|string|max:1000',
            'gambar'=>'required|image|mimes:jpg,jpeg,png,gif',
            'harga'=>'required|string|max:255'
        ]);

        $gambarPath = $request->file('gambar')->store('service', 'public');

        Service::create([
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$gambarPath,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga
        ]);
        return redirect()->route('service_input')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $layanan = Service::findOrFail($id);
        $kategori = ['Internet Of Things', 'Automation', 'Robotics', 'Tech Farm', '3D Printing' ,'Renewable Energy', 'Lasser Cutting', 'Workshop IoT'];
        return view('dashboard.adminservice.edit', compact('layanan', 'kategori'));
    }

    public function update(Request $request, Service $layanan )
    {
        $request->validate([
                'nama' => 'required|string|max:255',
                'kategori' => 'required|string',
                'deskripsi' => 'required|string|max:1000',
                'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif',
                'harga' => 'required|numeric'
            ]);

            $data = [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'harga' => $request->harga,
            ];

            // hanya update gambar jika ada file gambar baru
            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('service', 'public');
                $data['gambar'] = $gambarPath;
            }

            $layanan->update($data);

            return redirect()->route('admin_service')->with('success', 'Layanan berhasil diupdate.');
    }

    public function destroy(Service $layanan)
    {
        $layanan->delete();
        return back()->with('success', 'Layanan berhasil dihapus.');
    }


}
