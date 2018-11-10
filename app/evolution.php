<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Evolucion
class evolution extends Model
{
    protected $fillable = [
        'symptonm', 'treatment', 'disease', 'casefile_id'
    ];

    public function casefile(){
        return $this->belongsTo('App\casefile');
    }
}
