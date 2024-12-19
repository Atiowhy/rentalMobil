<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        "status_name",
    ];

    protected $table = "status_cars";
}