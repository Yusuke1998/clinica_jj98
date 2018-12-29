<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendar;

class calendaries extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	// $calendarios = calendar::all();
    	// return response()->json($calendarios);

    	$calendarios = calendar::all();
    	return response()->json($calendarios);
    }
}
