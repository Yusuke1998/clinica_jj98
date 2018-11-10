<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Direccion
class address extends Model
{
    protected $fillable = [
        'type', 'datails', 'patient_id', 'doctor_id', 'receptionist_id'
    ];

    public function patient(){
    	return $this->belongsTo('App\patient');
    }

    public function doctor(){
    	return $this->belongsTo('App\doctor');
    }

    public function receptionist(){
    	return $this->belongsTo('App\receptionist');
    }
}
