<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Tipo de sangre
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
