<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulb extends Model
{
    use HasFactory;
    protected $casts = [
        'image' => 'array',
    ];
}
