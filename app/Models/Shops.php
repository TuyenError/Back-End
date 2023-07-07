<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Shops extends Model
{
    use HasFactory;
    protected $table = 'shops';
    protected $with = ['users'];
    public function users() {
        return $this->hasOne(Users::class,'id');
    }
    public function product() {
        return $this->belongsTo(Products::class);
    }
    
}
