<?php

namespace App\Http\Controllers;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class inputPortofolioController extends Controller


{


    public function create()
    {
        return view('dashboard.input-porto'); // Mengarahkan ke form input portofolio
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:255',
            'client'=>'required|string',
            'tahun'=>'required|integer',
            'gambar'=>'required|image|mimes:jpg,jpeg,png,gif'
        
        ]);

        $gambarPath = $request->file('gambar')->store('portofolio', 'public');

        Portofolio::create([
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi,
            'client'=>$request->client,
            'tahun'=>$request->tahun,
            'gambar'=>$gambarPath
        ]);

        return redirect()->route('admin_porto')->with('success', 'Portofolio berhasil ditambahkan!');

    }
}
