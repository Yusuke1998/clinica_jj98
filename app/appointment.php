<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Cita
class appointment extends Model
{
    protected $fillable = [
        'date', 'patient_id'
    ];
}
