<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lead extends Model
{
    protected $fillable = [
        'google_place_id',
        'business_name',
        'category',
        'city',
        'country',
        'phone',
        'website',
        'address',
        'google_maps_url',
        'latitude',
        'longitude',
        'rating',
        'review_count',
        'business_status',
        'lead_score',
        'lead_category',
        'qualification_reasons',
        'scanned_at',
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'rating' => 'decimal:2',
        'qualification_reasons' => 'array',
        'scanned_at' => 'datetime',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city', 'name');
    }
}
