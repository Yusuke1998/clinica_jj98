<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Recepcionista
class receptionist extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci'
    ];
}
