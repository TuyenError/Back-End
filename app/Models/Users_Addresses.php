<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Addresses extends Model
{
    use HasFactory;
    protected $table = 'users_adresses';

    public function users() {
        return $this->belongsTo(Users::class,'user_id', 'id');
    }

    public function addresses() {
        return $this->belongsTo(Addresses::class,'address_id', 'id');
    }
}
