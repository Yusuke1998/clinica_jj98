<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Evolucion
class evolution extends Model
{
    protected $fillable = [
        'disease_id','user_id','symptom', 'treatment', 'casefile_id'
    ];

    public function casefile(){
        return $this->belongsTo('App\casefile');
    }

    public function disease(){
        return $this->belongsTo('App\disease');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
