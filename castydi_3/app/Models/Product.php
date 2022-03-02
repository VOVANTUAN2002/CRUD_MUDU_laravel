<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'id', 'name', 'price', 'image', 'des', 'quantity', 'categories_id', 'view_count'
    ];
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'categories_id', 'id');
    }
}
