<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Paciente
class patient extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci'
    ];
}
