<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImages;

class AutopartsProducts extends Model
{
    use HasFactory;
    protected $table = 'autoparts_products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'small_description',
        'description',
        'price',
        'quantity',
        'trending',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function productimages(){
        return $this->hasMany(ProductImages::class, 'product_id', 'id');
    }
   
}
