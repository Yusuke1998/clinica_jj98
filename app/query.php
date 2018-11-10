<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Consulta
class query extends Model
{
    protected $fillable = [
        'date', 'location', 'doctor_id', 'patient_id'
    ];

    public function patient(){
    	return $this->hasMany('App\patient');
    }

    public function doctor(){
    	return $this->hasMany('App\doctor');
    }


}
