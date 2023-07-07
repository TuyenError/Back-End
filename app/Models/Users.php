<?php

namespace App\Models;
use App\Models\Shops;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table ='users';
    protected $primaryKey = 'id';

    public function roles() {
        return $this->hasOne(Roles::class,'role_id') ;
    }

    public function shops() {
        return $this->belongsTo(Shops::class);
    }
    public function users_addresses() {
        return $this->belongsToMany(Users_Addresses::class);
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }
    public function carts() {
        return $this->belongsToMany(Carts::class);
    }
}
