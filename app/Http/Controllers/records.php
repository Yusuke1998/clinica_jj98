<?php
// EXPEDIENTES
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\casefile;
use App\patient;
use App\ethnicGroup;
use App\bloodType;
use App\disease;
use App\evolution;

class records extends Controller
{
    public function __construct()
    {
        $this->middleware('medico');
    }

    public function index()
    {
        $expedientes = casefile::all();
        return view('sistema/expediente/index')->with('expedientes',$expedientes);
    }

    public function create()
    {
        $pacientes = patient::all();
        $etnias = ethnicGroup::all();
        $sangres = bloodType::all();
        $enfermedades = disease::all();
        return view('sistema/expediente/create')
        ->with('pacientes',$pacientes)
        ->with('etnias',$etnias)
        ->with('sangres',$sangres)
        ->with('enfermedades',$enfermedades);
    }

    public function store(Request $request)
    {
        $expediente = casefile::create([
            'allergy'               =>  $request->allergy,
            'weight'                =>  $request->weight,
            'height'                =>  $request->height,
            'currentCondition_id'   =>  $request->currentCondition_id,
            'inheritedDisease_id'   =>  $request->inheritedDisease_id,
            'ethnic_group_id'       =>  $request->ethnic_group_id,
            'blood_type_id'         =>  $request->blood_type_id,
            'surgeries'             =>  $request->surgeries,
            'user_id'               =>  $request->user_id,
            'patient_id'            =>  $request->patient_id,
            'dayDate'               =>  $request->dayDate,
        ]);
        // return back()->with('info','Expediente creado exitosamente!');
        return redirect(route('expedientes.ver',$expediente->patient_id));
    }

    public function nuevo(Request $request, $id)
    {
        $paciente = patient::find($id);
        $etnias = ethnicGroup::all();
        $sangres = bloodType::all();
        $enfermedades = disease::all();
        return view('sistema/expediente/create')
        ->with('paciente',$paciente)
        ->with('etnias',$etnias)
        ->with('sangres',$sangres)
        ->with('enfermedades',$enfermedades);
    }

    public function show($id)
    {
        $expediente = casefile::find($id);
        return view('sistema/expediente/show',compact('expediente'));
    }

    public function ver($id)
    {
        $expediente = patient::where('id',$id)->first()->casefile;
        return view('sistema/paciente/show_casefile')->with('expediente',$expediente);
    }

    public function edit($id)
    {   $expediente = casefile::find($id);
        $etnias = ethnicGroup::all();
        $sangres = bloodType::all();
        $enfermedades = disease::all();
        return view('sistema/expediente/edit')
        ->with('expediente',$expediente)
        ->with('etnias',$etnias)
        ->with('sangres',$sangres)
        ->with('enfermedades',$enfermedades);
    }

    public function update(Request $request, $id)
    {   $expediente = casefile::find($id);
        $expediente->update($request->all());
        return back()->with('info','Expediente actualizado con exito!');
    }

    public function destroy($id)
    {
        $expediente = casefile::find($id)->delete();
        return back()->with('info','Expediente eliminado con exito!');
    }

    public function delete($id)
    {
        $expediente = casefile::find($id)->delete();
        return back()->with('info','Expediente eliminado con exito!');
    }
}
