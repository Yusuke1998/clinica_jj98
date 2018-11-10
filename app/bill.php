<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Factura
class bill extends Model
{
    protected $fillable = [
        'code', 'amountPaylable', 'query_id', 'doctor_id', 'patient_id'
    ];
}
