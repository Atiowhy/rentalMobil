<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trans_orders extends Model
{
    protected $fillable = [
        'id_customer',
        'trans_code',
        'trans_date',
        'date_rented',
        'date_returned',
        'total_amount',
        'order_pay',
        'order_change',
        'status'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
}