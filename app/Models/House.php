<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
     * Disable timestamps
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'
    ];
}
