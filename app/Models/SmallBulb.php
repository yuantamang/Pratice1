<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallBulb extends Model
{
    use HasFactory;
    protected $casts = [
        'image' => 'array',
    ];
}
