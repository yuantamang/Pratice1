<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class largeBulb extends Model
{
    use HasFactory;
    protected $casts = [
        'image' => 'array',
    ];
}
