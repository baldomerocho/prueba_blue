<?php

namespace App\Models\V1;

use App\Traits\UID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'plate',
        'type',
        'status',
        'activity_related',
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];
}
