<?php

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

class doctors extends Controller
{
    public function __construct()
    {
        $this->middleware('medico');
    }

    public function index()
    {
        $medicos = doctor::all();
        return view('sistema.medico.index')->with('medicos',$medicos);
    }

    public function create()
    {
        //
    }

        public function store(Request $request)
    {
        $usuario = User::create([
        'username' => $request->username,
        'email' => $request->email1,
        'rol' => 'doctor',
        'password' => bcrypt($request->password),
        ]);
        $getIdu = $usuario->id;

        $medico = doctor::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'telephone1' => $request->telephone1,
        'telephone2' => $request->telephone2,
        'email1' => $request->email1,
        'email2' => $request->email2,
        'address1' => $request->address1,
        'address2' => $request->address2,
        'user_id' => $getIdu,
        ]);
        $getIdm = $medico->id;

        return back();
    }

    public function show($id){
        $medico = doctor::find($id);
        return view('sistema/medico/show')->with('medico',$medico);
    }

    public function edit($id)
    {
        $editard = doctor::find($id);
        $medicos = doctor::all();

        return view('sistema/medico/edit')
        ->with('editard',$editard)
        ->with('medicos',$medicos);
    }

    public function update(Request $request, $id)
    {
        $medico = doctor::find($id);
        $medico->update([
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

        return back();
    }

    public function destroy($id)
    {
        $medico = doctor::find($id);
        $medico->delete();

        return back();
    }
}
