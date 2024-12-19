<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        "merk",
        "car_name",
        "mileage",
        "transmition",
        "lugage",
        "feature",
        "color",
        "seats",
        "year",
        "fuel",
        "description",
        "id_status",
        "foto",
        "price",
    ];

    protected $table = "cars";
}