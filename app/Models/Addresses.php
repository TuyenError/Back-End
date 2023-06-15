<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
    protected $table = 'addresses';

    public function user() {
        return $this->belongsToMany(Users_Addresses::class);
    }
    
}
