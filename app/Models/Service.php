<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['nama', 'gambar', 'deskripsi', 'harga', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category_Service::class, 'category_id');
    }
}
