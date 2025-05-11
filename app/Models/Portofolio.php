<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Portofolio extends Model
{
    use HasFactory,HasSlug;

    protected $table = 'portofolio';
    protected $fillable = ['nama','deskripsi_singkat', 'deskripsi','client','tahun','spesifikasi','gambar'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama')
            ->saveSlugsTo('slug');
    }
}
