<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Doctor
class doctor extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci', 'user_id', 'telephone1', 'telephone2', 'address1', 'address2', 'email1', 'email2','consultingroom_id'
    ];

    public function specialties(){
        return $this->belongsToMany('App\specialty','doctor_specialties');
    }

    public function patients(){
        return $this->belongsToMany('App\patient');
    }

    public function consultingroom(){
        return $this->belongsTo('App\consultingroom');
    }

    public function aquery(){
        return $this->hasOne('App\query');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function appointment(){
        return $this->hasMany('App\appointment');
    }

}
