<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $table = "images";

    protected $fillable = [
        'product_id',
        'link_image',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
public $timestamps = false;

}
