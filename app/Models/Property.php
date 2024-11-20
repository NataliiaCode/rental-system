<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Property extends Model
{
    use HasFactory;


    protected $fillable = [
        'property_type_id',
        'region_id',
        'description',
        'rooms',
        'bathrooms',
        'square_footage',
        'price',
        'is_renovated',
        'condition',
        'availability',
        'image',

    ];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function getImageAttribute($value)
    {
        return $value ? asset($value) : asset('storage/images/nophoto.png');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }



    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
