<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'id', 'name'
    ];
    public $timestamps = false;

    protected $primaryKey='id';

    public function product(){
        return $this->Hasmany('Product_id','id');
    }
}
