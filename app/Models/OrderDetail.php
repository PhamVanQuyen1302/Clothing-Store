<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;


    protected $table = 'order_details';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'into_money'
    ];

    // Mối quan hệ với Order  
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Mối quan hệ với Product  
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
