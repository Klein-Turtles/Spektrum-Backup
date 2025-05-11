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
            'deskripsi_singkat'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:1000',
            'client'=>'required|string',
            'tahun'=>'required|integer',
            'spesifikasi'=>'required|string|max:1000',
            'gambar'=>'required|image|mimes:jpg,jpeg,png,gif'
        
        ]);

        $gambarPath = $request->file('gambar')->store('portofolio', 'public');

        Portofolio::create([
            'nama'=>$request->nama,
            'deskripsi_singkat'=>$request->deskripsi_singkat,
            'deskripsi'=>$request->deskripsi,
            'client'=>$request->client,
            'tahun'=>$request->tahun,
            'spesifikasi'=>$request->spesifikasi,
            'gambar'=>$gambarPath
        ]);

        return redirect()->route('admin_porto')->with('success', 'Portofolio berhasil ditambahkan!');

    }
}
