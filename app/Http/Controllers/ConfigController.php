<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\config;

class ConfigController extends Controller
{
    public function index(){
    	$configuracion = config::all();
    	return view('sistema.configuracion.index')
    	// ->with(compact('configuracion'))
    	->with('configuracion',$configuracion);
    }

    public function store(Request $request){
    	// dd($request);
    	if ($request->file('logo')) {
            $file = $request->file('logo');
            $nameImage = 'logo_clinica'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'\img';
            $file->move($path,$nameImage);
        }

        $configuracion = new config;
        $configuracion->name = $request->name;
        $configuracion->telephone = $request->telephone;
        $configuracion->address = $request->address;
        $configuracion->rif = $request->rif;
        $configuracion->iva = $request->iva;
        $configuracion->logo = $request->logo;
        $configuracion->user_id = $request->user_id;
        $configuracion->save();


    	return back();
    }

    public function update(Request $request, $id){
    	// dd($request);
    	if ($request->file('logo')) {
            $file = $request->file('logo');
            $nameImage = 'logo_clinica'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'\img';
            $file->move($path,$nameImage);
        }else{
        	$nameImage = '';
        }

        $configuracion = config::find($id);
        $configuracion->name = $request->name;
        $configuracion->telephone = $request->telephone;
        $configuracion->address = $request->address;
        $configuracion->rif = $request->rif;
        $configuracion->iva = $request->iva;
        $configuracion->logo = $nameImage;
        $configuracion->user_id = $request->user_id;
        $configuracion->save();


    	return back();
    }
}
