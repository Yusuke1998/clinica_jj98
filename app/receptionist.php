<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Recepcionista
class receptionist extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci', 'user_id', 'telephone1', 'telephone2', 'address1', 'address2', 'email1', 'email2',
    ];

    public function casefiles(){
        return $this->hasMany('App\casefile');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
