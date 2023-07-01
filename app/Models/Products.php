<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function categories() {
        return $this->hasMany(Categories::class,'category_id');
    }
    public function shops() {
        return $this->hasMany(Shops::class,'shop_id');
    }
    public function orders_details() {
        return $this->belongsTo(Order_details::class);
    }
    public function carts() {
        return $this->hasMany(Carts::class,'product_id');
    }
}
