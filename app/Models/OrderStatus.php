<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $table = 'order_status'; // Tên bảng trong cơ sở dữ liệu  

    protected $fillable = [  
        'name',  
    ];  

    // Mối quan hệ với Order  
    public function orders()  
    {  
        return $this->hasMany(Order::class);  
    }  
}
