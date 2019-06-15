<?php
// PACIENTES
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\casefile;
use App\consultingroom;
use App\patient;
use App\specialty;
use App\receptionist;
use App\appointment;
use App\bill;
use App\evolution;
use App\query;
use App\User;

class patients extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pacientes = patient::all();

        return view('sistema/paciente/index')
        ->with('pacientes',$pacientes);
    }

    public function create(){
        return view('sistema/paciente/create');
    }

    public function store(Request $request)
    {
        $paciente = patient::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'telephone1' => $request->telephone1,
        'telephone2' => $request->telephone2,
        'email1' => $request->email1,
        'email2' => $request->email2,
        'address1' => $request->address1,
        'address2' => $request->address2,
        ]);
        return redirect(Route('pacientes.index'))->with('info','Paciente creado con exito!');
    }

    public function edit($id)
    {
        $editarp = patient::find($id);
        $pacientes = patient::all();

        return view('sistema/paciente/edit')
        ->with('editarp',$editarp)
        ->with('pacientes',$pacientes);
    }

    public function update(Request $request, $id)
    {
        $paciente = patient::find($id);
        $paciente->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'telephone1' => $request->telephone1,
        'telephone2' => $request->telephone2,
        'email1' => $request->email1,
        'email2' => $request->email2,
        'address1' => $request->address1,
        'address2' => $request->address2,
        ]);

        return redirect(Route('pacientes.index'))->with('info','Paciente actualizado con exito!');
    }

    public function show($id){
        $paciente = patient::find($id);

        return view('sistema/paciente/show')->with('paciente',$paciente);
    }

    public function destroy($id)
    {
        $paciente = patient::find($id);
        $paciente->delete();

        return redirect(Route('pacientes.index'))->with('info','Paciente creado con exito!');
    }

    public function delete($id)
    {
        $paciente = patient::find($id);
        $paciente->delete();

        return redirect(Route('pacientes.index'))->with('info','Paciente creado con exito!');
    }
}
