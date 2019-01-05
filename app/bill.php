<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Factura
class bill extends Model
{
    protected $fillable = [
        'code', 'amountPaylable', 'user_id', 'appointment_id'
    ];

    public function appointment(){
    	return $this->belongsTo('App\appointment');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
