<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $casts = [
        'image' => 'array',
    ];
    /**
     * Get all of the categoreys for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoreys(): HasMany
    {
        return $this->hasMany(Categorey::class);
    }
}
