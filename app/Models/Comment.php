<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';  

    // Các cột mà bạn có thể gán giá trị hàng loạt  
    protected $fillable = [  
        'user_id',  
        'product_id',  
        'content',  
        'status',  
    ];  

    // Quan hệ với bảng User  
    public function user()  
    {  
        return $this->belongsTo(User::class);  
    }  

    // Quan hệ với bảng Product  
    public function product()  
    {  
        return $this->belongsTo(Product::class);  
    }  
}
