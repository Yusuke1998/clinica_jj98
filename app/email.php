<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Email
class email extends Model
{
    protected $fillable = [
        'email', 'patient_id', 'doctor_id', 'receptionist_id'
    ];
}
