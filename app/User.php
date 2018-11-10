<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
// Usuario
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'email', 'rol'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
