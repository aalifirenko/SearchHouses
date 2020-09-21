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

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['price_text'];

    /**
     * Get the price .
     *
     * @return string
     */
    public function getPriceTextAttribute(): string
    {
        return number_format($this->price, 0, ' ', ' ');
    }
}
