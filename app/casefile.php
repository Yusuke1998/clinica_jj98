<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Expediente
class casefile extends Model
{
    protected $fillable = [
        'allergy', 'weight', 'height', 'currentCondition_id', 'inheritedDisease_id', 'ethnic_group_id', 'blood_type_id', 'surgeries', 'user_id', 'patient_id','dayDate',
    ];

    public function bloodtype(){
        return $this->belongsTo('App\bloodType','blood_type_id');
    }

    public function ethnicgroup(){
        return $this->belongsTo('App\ethnicGroup','ethnic_group_id');
    }

    public function currentCondition(){
        return $this->belongsTo('App\disease','currentCondition_id');
    }

    public function inheritedDisease(){
        return $this->belongsTo('App\disease','inheritedDisease_id');
    }

    public function patient(){
        return $this->belongsTo('App\patient');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function receptionist(){
        return $this->belongsTo('App\receptionist');
    }

    public function evolutions(){
        return $this->hasMany('App\evolution');
    }
}
