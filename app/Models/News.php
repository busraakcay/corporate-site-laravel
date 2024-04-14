<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = [];

    protected $casts = [
        'date' => 'datetime'
    ];

    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope);
    }
}
