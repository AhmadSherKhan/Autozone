<?php

namespace App\Models;

use App\Models\AutopartsProducts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
 
    protected $table='product_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ] ;

    public function products(){
        return $this->hasMany(AutopartsProducts::class, 'category_id', 'id');
    }
}
