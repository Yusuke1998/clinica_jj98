<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Consulta
class query extends Model
{
    protected $fillable = [
        'date', 'location', 'doctor_id'
    ];
}
