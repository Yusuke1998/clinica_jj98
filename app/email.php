<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Email
class email extends Model
{
    protected $fillable = [
        'email', 'patient_id', 'doctor_id', 'receptionist_id'
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
