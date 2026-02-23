<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'country_code',
        'is_active',
        'last_scanned_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'last_scanned_at' => 'datetime',
    ];
}
