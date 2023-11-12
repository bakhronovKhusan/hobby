<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    const AVAILABLE = 'available';
    const UNAVAILABLE = 'unavailable';
    protected $fillable = ['article', 'name', 'status', 'data'];

    public function scopeAvailable($query)
    {
        return $query->where('STATUS', self::AVAILABLE);
    }
}
