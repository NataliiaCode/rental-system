<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',  // Тепер використовується Ⓝproperty_idⓃ
        'tenant_id',    // Ідентифікатор орендаря, який залишив відгук
        'comment',

    ];

    // зв'язок з таблицями

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
