<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Shops extends Model
{
    use HasFactory;
    protected $table = 'shops';

    public function user() {
        return $this->hasOne(Users::class,'user_id');
    }
    public function product() {
        return $this->belongsTo(Products::class);
    }

    
}
