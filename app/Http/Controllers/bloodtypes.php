<?php
// TIPOS DE SANGRE
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bloodtypes extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
