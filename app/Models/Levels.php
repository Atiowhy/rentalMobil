<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    protected $fillable = [
        "nama_level"
    ];
    protected $table = 'lavels';

    //   public function users()
    // {
    //     return $this->hasMany(User::class, 'id_level', 'id');
    // }
}
