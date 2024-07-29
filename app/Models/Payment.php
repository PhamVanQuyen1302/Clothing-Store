<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments'; // Tên bảng trong cơ sở dữ liệu  

    protected $fillable = [  
        'name',  
    ];  

    // Mối quan hệ với Order  
    public function orders()  
    {  
        return $this->hasMany(Order::class);  
    }  
}
