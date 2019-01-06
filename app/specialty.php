<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Especialidad
class specialty extends Model
{
    protected $fillable = [
        'name', 'details',
    ];

    public function doctors(){
    	return $this->belongsToMany('App\doctor','doctor_specialties');
    }
}
