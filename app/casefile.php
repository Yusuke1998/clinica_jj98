<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Expediente
class casefile extends Model
{
    protected $fillable = [
        'age', 'weight', 'height', 'currentCondition', 'inheritedDisease', 'ethnicGroup', 'bloodType', 'surgeries', 'user_id', 'patient_id'
    ];

    public function patient(){
        return $this->belongsTo('App\patient');
    }

    public function receptionist(){
        return $this->belongsTo('App\receptionist');
    }
}
