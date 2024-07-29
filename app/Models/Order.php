<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'code_order',
        'user_id',
        'name',
        'email',
        'tel',
        'address',
        'booking_date',
        'total',
        'note',
        'payment_id',
        'order_status_id'
    ];

    // Mối quan hệ với người dùng  
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mối quan hệ với OrderDetail  
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // Mối quan hệ với trạng thái đơn hàng  
    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
