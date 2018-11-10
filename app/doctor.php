<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Doctor
class doctor extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'ci'
    ];
}
