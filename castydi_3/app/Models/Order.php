<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function order_details()
    {
        return $this->hasMany(Order::class,'oeder_id','id');
    }
}
