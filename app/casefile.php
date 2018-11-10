<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Expediente
class casefile extends Model
{
    protected $fillable = [
        'age', 'weight', 'height', 'currentCondition', 'inheritedDisease', 'ethnicGroup', 'bloodType', 'surgeries', 'user_id', 'patient_id'
    ];
}
