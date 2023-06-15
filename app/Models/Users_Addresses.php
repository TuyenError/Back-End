<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Addresses extends Model
{
    use HasFactory;
    protected $table = 'users_adresses';

    public function users() {
        return $this->hasMany(Users::class,'user_id');
    }

    public function addresses() {
        return $this->hasMany(Addresses::class,'address_id');
    }
}
