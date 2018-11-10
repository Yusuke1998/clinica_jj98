<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Doctor
class doctor extends Model
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

    public function specialties(){
        return $this->belongsToMany('App\specialty','doctor_specialties');
    }

    public function patients(){
        return $this->belongsToMany('App\patient');
    }

    public function consultingroom(){
        return $this->belongsTo('App\consultingroom');
    }

    /*public function query(){
        return $this->belongsTo('App\query','doctor_id','id');
    }*/

}
