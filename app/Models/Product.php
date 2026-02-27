<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category', 'description', 'image', 'is_active'];

    public function prices()
    {
        return $this->hasMany(PriceHistory::class);
    }
}
