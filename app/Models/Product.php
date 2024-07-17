<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'promotional_price',
        'date',
        'description',
        'category_id',
        'status',
    ];

    public function category() {
        return $this->BelongsTo(Category::class);
    }

    public function image()  
    {  
        return $this->hasMany(Image::class);  
    }  
    public $timestamps = false;
}
