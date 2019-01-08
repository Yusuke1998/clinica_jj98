<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloodType extends Model
{
	protected $table = 'blood_type';

    protected $fillable=[
    	'name'
    ];

    public function casefile(){
    	return $this->hasMany('App\casefile');
    }
}
