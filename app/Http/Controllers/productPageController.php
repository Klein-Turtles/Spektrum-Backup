<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class productPageController extends Controller
{

    public function product(Request $request){

    $kategorilist = Product::select('kategori')->distinct()->pluck('kategori');

    $query = Product::query();

    if ($request->has('kategori') && $request->kategori !== '') {
        $query->where('kategori', $request->kategori);
    }

    if ($request->has('q') && $request->q !== '') {
        $query->where('nama', 'like', '%' . $request->q . '%');
    }

    $products = $query->paginate(8)->withQueryString(); // 8 per halaman, withQueryString biar query tetap (kategori nggak hilang saat klik halaman)

        return view('product', compact('products', 'kategorilist'));
    }

    // Services For Admin
    public function index()
    {
        $products = Product::all();
        return view('dashboard.adminproduct.index', compact('products'));
    }

    public function detailProduct($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('detail-product', compact('product'));
    }

    public function create()
    {
        $kategori = ['Internet Of Things', 'Automation', 'Robotics', 'Tech Farm', '3D Printing' ,'Renewable Energy', 'Lasser Cutting', 'Workshop IoT']; // atau ambil dari model Category
        return view('dashboard.adminproduct.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi'=>'required|string|max:1000',
            'gambar'=>'required|image|mimes:jpg,jpeg,png,gif',
            'harga' => 'required|numeric'
        ]);

        $gambarPath = $request->file('gambar')->store('products', 'public');

        Product::create([
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$gambarPath,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga
        ]);
        return redirect()->route('product_input')->with('success', 'product berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $kategori = ['Internet Of Things', 'Automation', 'Robotics', 'Tech Farm', '3D Printing' ,'Renewable Energy', 'Lasser Cutting', 'Workshop IoT'];
        return view('dashboard.adminproduct.edit', compact('product', 'kategori'));
    }

    public function update(Request $request, Product $product )
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
                $gambarPath = $request->file('gambar')->store('products', 'public');
                $data['gambar'] = $gambarPath;
            }

            $product->update($data);

            return redirect()->route('admin_product')->with('success', 'product berhasil diupdate.');
    }

    public function destroy(Product $products)
    {
        $products->delete();
        return back()->with('success', 'product berhasil dihapus.');
    }
    


}
