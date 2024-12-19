<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_orders extends Model
{
    protected $fillable = [
        'id_trans_order',
        'id_car',
        'qty',
        'price',
        'subtotal',
    ];

    protected $table = 'detail_trans_orders';

    public function car(){
        return $this->belongsTo(Car::class, 'id_car', 'id');
    }

    public function order(){
        return $this->belongsTo(Trans_orders::class, 'id_trans_order', 'id');
    }
}