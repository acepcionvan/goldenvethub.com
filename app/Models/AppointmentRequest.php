<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentRequest extends Model
{
    protected $fillable = [
        'owner_name',
        'phone',
        'pet_type',
        'service_needed',
        'preferred_date',
        'preferred_time',
    ];
}
