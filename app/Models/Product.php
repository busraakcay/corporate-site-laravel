<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $guarded = [];

    public function images()
    {
        return  $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope);
    }
}
