<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Consultorio
class consultingroom extends Model
{
    protected $fillable = [
        'location', 'number'
    ];

    public function doctor(){
        return $this->hasOne('App\doctor');
    }
}
