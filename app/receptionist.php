<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Recepcionista
class receptionist extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci'
    ];

    public function telephones(){
        return $this->hasMany('App\telephone');
    }

    public function emails(){
        return $this->hasMany('App\email');
    }

    public function addresses(){
        return $this->hasMany('App\address');
    }

    public function casefiles(){
        return $this->hasMany('App\casefile');
    }
}
