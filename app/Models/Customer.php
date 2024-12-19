<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        "customer_name",
        "phone",
        "email",
        "sim_number",
        "password",
        "address",
        "foto"
    ];

    protected $table = 'customers';
}