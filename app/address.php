<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Direccion
class address extends Model
{
    protected $fillable = [
        'type', 'datails', 'patient_id', 'doctor_id', 'receptionist_id'
    ];
}
