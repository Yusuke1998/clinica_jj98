<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Telefono
class telephone extends Model
{
    protected $fillable = [
        'type', 'number', 'patient_id', 'doctor_id', 'receptionist_id'
    ];
}
