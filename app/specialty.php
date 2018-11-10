<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Especialidad
class specialty extends Model
{
    protected $fillable = [
        'name', 'datails', 'doctor_id'
    ];
}
