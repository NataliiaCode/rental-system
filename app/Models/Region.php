<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

    ];

    // // Зв'язок з House
    // public function houses()
    // {
    //     return $this->hasMany(House::class);
    // }
}
