<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Paciente
class patient extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci', 'telephone1', 'telephone2', 'address1', 'address2', 'email1', 'email2',
    ];

    public function casefile(){
        return $this->hasOne('App\casefile');
    }

    public function doctors(){
        return $this->belongsToMany('App\doctor');
    }

    public function aquery(){
        return $this->hasMany('App\query');
    }

    public function appointment(){
        return $this->hasMany('App\appointment');
    }
}
