<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Consultorio
class consultingroom extends Model
{
    protected $fillable = [
        'location', 'doctor_id'
    ];
}
