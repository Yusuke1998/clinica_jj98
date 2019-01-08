<?php
// GRUPO ETNICO
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ethnicgroups extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
