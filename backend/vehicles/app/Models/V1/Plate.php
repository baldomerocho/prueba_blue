<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'plate',
        'price_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'price',
    ];

    public function getPriceAttribute()
    {
        return $this->price()->first();
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
