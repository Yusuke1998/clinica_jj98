<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\calendar;
use App\appointment;

class calendar extends Model
{
    protected $fillable = [
    	'title','start','start_time_on','start_time_off','appointment_id'
    ];

    public function appointment(){
    	return $this->belongsTo('App\appointment');
    }
}
