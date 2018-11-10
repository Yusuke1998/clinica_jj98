<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Paciente
class patient extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci'
    ];

    public function telephones(){
        return $this->hasMany('App\Telephone');
    }

    public function emails(){
        return $this->hasMany('App\Email');
    }

    public function addresses(){
        return $this->hasMany('App\Address');
    }

    public function casefile(){
        return $this->hasOne('App\casefile');
    }

    public function doctors(){
        return $this->belongsToMany('App\doctor');
    }

    /*public function query(){
        return $this->belongsTo('App\query','patient_id','id');
    }*/
}
