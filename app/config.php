<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    protected $fillable = [
    	'p0','p1','p2','p3','p4','p5','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
