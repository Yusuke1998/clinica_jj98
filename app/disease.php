<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Enfermedad
class disease extends Model
{
	protected $table = 'diseases';

    protected $fillable=[
    	'name'
    ];

    public function casefile(){
    	return $this->hasMany('App\casefile');
    }
}
