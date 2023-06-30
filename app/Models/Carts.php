<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $fillable=[
        'user_id',
        'product_id',
        'quantity',
    ];

    public function users() {
        return $this->hasMany(Users::class,'user_id');
    }

    public function products() {
        return $this->hasMany(Products::class,'product_id');
    }
}
