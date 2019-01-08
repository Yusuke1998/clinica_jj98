<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ethnicGroup extends Model
{
	protected $table = 'ethnic_group';

    protected $fillable=[
    	'name'
    ];

    public function casefile(){
    	return $this->hasMany('App\casefile');
    }
}
