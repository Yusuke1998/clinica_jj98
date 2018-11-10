<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Especialidad
class specialty extends Model
{
    protected $fillable = [
        'name', 'datails', 'doctor_id'
    ];

    public function doctors(){
    	return $this->belongsToMany('App\doctor','doctor_specialties');
    }
}
