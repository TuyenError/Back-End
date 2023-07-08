<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'tbl_orders';

    protected $fillable=[
        'id',
        'user_id',
        'cart_id',
        'date',
        'payType',
        'totalPrice',
        'status'
    ];

    public function users() {
        return $this->belongsTo(Users::class,'user_id' , 'id');
    }
}
