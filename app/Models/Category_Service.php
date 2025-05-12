<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_Service extends Model
{
    protected $table = ['categories_service'];
    protected $fillable = ['nama'];

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }   
}
