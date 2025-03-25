<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_category_id', 'name', 'price', 'image'];

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'product_category_id');
    }
}