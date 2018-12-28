<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evolution;
use App\casefile;
use App\patient;
use App\User;
use App\disease;

class evolutions extends Controller
{
    public function index()
    {
        $evoluciones = evolution::all();
        return view('sistema.evolucion.index')->with('evoluciones',$evoluciones);
    }

    public function create()
    {
        $expedientes = casefile::all();
        $enfermedades = disease::all();
        return view('sistema/evolucion/create')
        ->with('expedientes',$expedientes)
        ->with('enfermedades',$enfermedades);
    }

    public function nueva($id)
    {
        $expediente = casefile::find($id);
        $enfermedades = disease::all();
        return view('sistema/evolucion/create-id')
        ->with('enfermedades',$enfermedades)
        ->with('expediente',$expediente);
    }

    public function store(Request $request)
    {
        $evolucion = evolution::create([
            'symptom'       =>  $request->symptom,
            'treatment'     =>  $request->treatment,
            'user_id'       =>  $request->user_id,
            'casefile_id'   =>  $request->casefile_id,
            'disease_id'    =>  $request->disease_id
        ]);

        return back()->with('info','Evolucion creada con exito!');
    }

    public function show($id)
    {
        $evolucion = evolution::find($id);
        return view('sistema.evolucion.show')->with('evolucion',$evolucion);
    }

    public function edit($id)
    {
        $evolucion = evolution::find($id);
        $enfermedades = disease::all();
        return view('sistema.evolucion.edit')
        ->with('enfermedades',$enfermedades)
        ->with('evolucion',$evolucion);
    }

    public function update(Request $request, $id)
    {
        $evolucion = evolution::find($id);
        $evolucion->update($request->all());
        return back()->with('info','Evolucion actualizada con exito!');
    }

    public function destroy($id)
    {
        $evolucion = evolution::find($id);
        $evolucion->delete();
        return back()->with('info','Evolucion eliminada con exito!');
    }
}
