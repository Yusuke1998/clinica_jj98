<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
// Usuario
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email','rol','password'
    ];

    protected $hidden = [
        'remember_token','password'
    ];

    public function records(){
        return $this->hasMany('App\casefile');
    }

    public function receptionist(){
    	return $this->hasOne('App\receptionist');
    }

    public function doctor(){
    	return $this->hasOne('App\doctor');
    }

    public function appointments(){
        return $this->hasMany('App\appointment');
    }

}
